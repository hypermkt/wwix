package main

import (
	"github.com/labstack/echo"
	//"github.com/labstack/echo/engine/standard"
	"github.com/labstack/echo/middleware"
	"net/http"
	//"strconv"

	_ "github.com/go-sql-driver/mysql"
	"github.com/gocraft/dbr"
)

type WebsiteTemplate struct {
	Id   int    `json:"id"`
	Name string `json:"name"`
}

type DbWebsiteTemplate struct {
	Id   int    `db:"id"`
	Name string `db:"name"`
}

var (
	conn, _ = dbr.Open("mysql", "root:@tcp(localhost:3306)/wwix_development", nil)
	sess    = conn.NewSession(nil)
)

func main() {
	e := echo.New()

	// Middleware
	e.Use(middleware.Logger())

	// Routing
	e.GET("/v1/website_templates", SelectWebsiteTemplates)

	e.Logger.Fatal(e.Start(":1323"))
}

func SelectWebsiteTemplates(c echo.Context) error {
	var templates []DbWebsiteTemplate
	sess.Select("*").From("website_templates").Load(&templates)

	return c.JSON(http.StatusOK, templates)
}

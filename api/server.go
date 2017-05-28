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

type WebsiteTemplateJson struct {
	Id   int    `json:"id"`
	Name string `json:"name"`
}

type WebsiteTemplateDb struct {
	Id   int    `db:"id"`
	Name string `db:"name"`
}

type WebsiteTemplateResponse struct {
	WebsiteTemplates []WebsiteTemplateJson `json:"website_templates"`
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
	var t []WebsiteTemplateJson
	sess.Select("*").From("website_templates").Load(&t)

	response := new(WebsiteTemplateResponse)
	response.WebsiteTemplates = t

	return c.JSON(http.StatusOK, response)
}

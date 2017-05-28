package main

import (
	"github.com/labstack/echo"
	"net/http"
)

type WebsiteTemplate struct {
	Id   int    `json:"id"`
	Name string `json:"name"`
}

func main() {
	e := echo.New()

	e.GET("/v1/website_templates", func(c echo.Context) error {
		templates := []WebsiteTemplate{
			{Id: 1, Name: "Cool Template"},
			{Id: 2, Name: "Cute Template"},
		}
		return c.JSON(http.StatusOK, templates)
	})

	e.Logger.Fatal(e.Start(":1323"))
}

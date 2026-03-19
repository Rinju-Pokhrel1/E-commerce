<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; }
                h2 { color: #333; border-bottom: 2px solid #4CAF50; padding-bottom: 10px; }
                table { width: 100%; border-collapse: collapse; background: white; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
                th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
                th { background-color: #4CAF50; color: white; }
                tr:nth-child(even) { background-color: #f9f9f9; }
                .price { font-weight: bold; color: #2e7d32; }
            </style>
        </head>
        <body>
            <h2>Validated Library Collection</h2>
            <table>
                <tr>
                    <th>Book ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Price (Rs.)</th>
                </tr>
                <xsl:for-each select="library/book">
                <tr>
                    <td><xsl:value-of select="@id"/></td>
                    <td><xsl:value-of select="title"/></td>
                    <td><xsl:value-of select="author"/></td>
                    <td><xsl:value-of select="year"/></td>
                    <td class="price"><xsl:value-of select="price"/></td>
                </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
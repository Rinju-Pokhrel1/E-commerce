<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
        <head>
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                    font-family: Arial, sans-serif;
                }
                table, th, td {
                    border: 1px solid black;
                }
                th, td {
                    padding: 8px;
                    text-align: left;
                }
                th {
                    background-color: #ffffff;
                }
            </style>
        </head>
        <body>
            <table>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Publisher</th>
                    <th>Year</th>
                </tr>
                <xsl:for-each select="library/book">
                <tr>
                    <td><xsl:value-of select="title"/></td>
                    <td><xsl:value-of select="location"/></td>
                    <td><xsl:value-of select="publisher"/></td>
                    <td><xsl:value-of select="year"/></td>
                </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
        <head>
            <style>
                table { width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; }
                th, td { border: 1px solid #dddddd; text-align: left; padding: 12px; }
                th { background-color: #4CAF50; color: white; }
                tr:nth-child(even) { background-color: #f2f2f2; }
            </style>
        </head>
        <body>
            <h2>My Playlist</h2>
            <table>
                <tr>
                    <th>Song Name</th>
                    <th>Singer</th>
                    <th>Composed By</th>
                    <th>Length</th>
                </tr>
                <xsl:for-each select="playlist/song">
                <tr>
                    <td><xsl:value-of select="name"/></td>
                    <td><xsl:value-of select="singer"/></td>
                    <td><xsl:value-of select="composedby"/></td>
                    <td><xsl:value-of select="length"/></td>
                </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
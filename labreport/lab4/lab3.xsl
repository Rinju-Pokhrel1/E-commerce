<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; padding: 20px; }
                    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                    th, td { border: 1px solid #333; padding: 10px; text-align: left; }
                    th { background-color: #4CAF50; color: white; }
                    tr:nth-child(even) { background-color: #f2f2f2; }
                    .error { color: red; font-weight: bold; }
                    .success { color: green; }
                </style>
            </head>
            <body>
                <h2>Lab 4.3: Book Inventory System</h2>
                <table>
                    <tr>
                        <th>ISBN</th>
                        <th>Book Name</th>
                        <th>Authors</th>
                        <th>Pages</th>
                        <th>Price</th>
                    </tr>
                    <xsl:for-each select="books/book">
                        <tr>
                            <td><xsl:value-of select="@isbn"/></td>
                            <td>
                                <xsl:value-of select="name/firstname"/>
                                <xsl:text> </xsl:text>
                                <xsl:if test="name/middlename">
                                    <xsl:value-of select="name/middlename"/>
                                    <xsl:text> </xsl:text>
                                </xsl:if>
                                <xsl:value-of select="name/lastname"/>
                            </td>
                            <td>
                                <xsl:for-each select="author">
                                    <xsl:value-of select="."/>
                                    <xsl:if test="position() != last()">, </xsl:if>
                                </xsl:for-each>
                            </td>
                            <td><xsl:value-of select="pageno"/></td>
                            <td>
                                Rs. <xsl:value-of select="price"/>
                                <br/>
                                <span>
                                    <xsl:choose>
                                        <xsl:when test="price &lt;= 1000">
                                            <span class="success">(Price OK)</span>
                                        </xsl:when>
                                        <xsl:otherwise>
                                            <span class="error">(Exceeds 1000!)</span>
                                        </xsl:otherwise>
                                    </xsl:choose>
                                </span>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
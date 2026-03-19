<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; }
                    h2 { margin-bottom: 10px; }
                    .student-line { display: block; margin-bottom: 5px; }
                </style>
            </head>
            <body>
                <h2>List of students</h2>
                
                <xsl:for-each select="class/student">
                    <div class="student-line">
                        Name: <xsl:value-of select="name"/>, 
                        Address: <xsl:value-of select="address"/>, 
                        Roll no: <xsl:value-of select="rollno"/>
                    </div>
                </xsl:for-each>
                
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
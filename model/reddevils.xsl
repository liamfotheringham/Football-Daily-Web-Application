<?xml version="1.0" encoding="utf-8"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" >
<xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html"/>
    
    <xsl:template match="/">
        <!--
        <xsl:apply-templates select="//channel/item/title[contains(.,'Manchester United')]" />
        </xsl:template>
    -->

        <xsl:for-each select="//channel/item">
            <xsl:if test="title[contains(.,'Man Utd')]">
            <a><xsl:attribute name="href">
                <xsl:value-of select="link"/></xsl:attribute>
                <xsl:value-of select="title" /><br/><br/>
            </a>
            </xsl:if>
        </xsl:for-each>
    </xsl:template>

</xsl:stylesheet>
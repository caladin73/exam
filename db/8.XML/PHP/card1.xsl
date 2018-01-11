<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns="http://www.w3.org/1999/xhtml">

    <xsl:output
     method="xml"
     doctype-system="about:legacy-compat"
     encoding="UTF-8"
     indent="yes" />

	<!-- 1st step -->
	<xsl:template match="/card">
   		<html>
			<head>
				<title><xsl:value-of select="/card/name"/></title>
				<link rel="stylesheet" type="text/css" href="card1.css" />
			</head>
			<body>
				<xsl:apply-templates/>
			</body>
		</html>
	</xsl:template>

	<xsl:template match="name">
		<h1><xsl:apply-templates/></h1>
	</xsl:template>

	<xsl:template match="title">
		<p><i><xsl:apply-templates/></i></p>
	</xsl:template>

	<xsl:template match="email">
		<p><xsl:apply-templates/></p>
	</xsl:template>

	<xsl:template match="uri">
		<p><xsl:apply-templates/></p>
	</xsl:template>

	<xsl:template match="phone">
		<p><xsl:apply-templates/></p>
	</xsl:template>

    <xsl:template match="logo">
        <xsl:if test="@uri!=''">
            <div><img src="{@uri}" alt="The image {@uri}"/></div>
        </xsl:if>
    </xsl:template>
</xsl:stylesheet>

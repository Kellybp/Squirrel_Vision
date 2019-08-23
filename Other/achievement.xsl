<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:template match="/">
      <xsl:variable name="current">
         <xsl:value-of select="fileName" />
      </xsl:variable>
      <xsl:for-each select="videos/video">

         <div class="col s12 m4">
            <div class="card small hovering">
               <!--Use this line to link back to top href='#'
                  While using onclick to setup the video-->
               <a href="#"  class="waves-effect waves-light">
                  <xsl:attribute name="onclick">
                     javascript:myFunction('<xsl:value-of select="vName"/>,<xsl:value-of select="$current"/>')
                  </xsl:attribute>
               </a>
               <div class="card-image">
                  <img>
                  <xsl:attribute name="src">
                     <xsl:value-of select="concat('images/',$current, '.jpg')"/>
                  </xsl:attribute>
                  <xsl:attribute name="alt">
                     <xsl:value-of select="$current"/>
                  </xsl:attribute>
                  </img>
               </div>
               <div class="card-content">
                  <p>
                     <xsl:value-of select="vTitle"/>
                  </p>
               </div>
               </a>
            </div>
         </div>
      </xsl:for-each>
   </xsl:template>
</xsl:stylesheet>
<?xml version="1.0" encoding="UTF-8"?>
<StyledLayerDescriptor xmlns="http://www.opengis.net/sld" xmlns:ogc="http://www.opengis.net/ogc" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" version="1.1.0" xmlns:xlink="http://www.w3.org/1999/xlink" xsi:schemaLocation="http://www.opengis.net/sld http://schemas.opengis.net/sld/1.1.0/StyledLayerDescriptor.xsd" xmlns:se="http://www.opengis.net/se">
	<NamedLayer>
		<Name>XPlan Default Layer</Name>
    <Description>Der einzige Layer für alle XPlan-Elemente. Bei mehreren Bereichen sollten evtl. mehrere Layer angelegt werden.</Description>
		<UserStyle>
			<Name>XPlan-Style</Name>
      <Title>XPlan-Style</Title>
      <Abstract>Der XPlan Style styled alle XPlan-Darstellungen auf FeatureType-Basis.</Abstract>
      <!--RP_Freiraum-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Freiraum</Title>
				<FeatureTypeName>RP_Freiraum</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#00FF00</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#00FF00</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#00FF00</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Bodenschutz-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Bodenschutz</Title>
				<FeatureTypeName>RP_Bodenschutz</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8B4513</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8B4513</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8B4513</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_GruenzugGruenzaesur-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_GruenzugGruenzaesur</Title>
				<FeatureTypeName>RP_GruenzugGruenzaesur</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#90EE90</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#90EE90</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#90EE90</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Hochwasserschutz-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Hochwasserschutz</Title>
				<FeatureTypeName>RP_Hochwasserschutz</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#00BFFF</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#00BFFF</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#00BFFF</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_NaturLandschaft-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_NaturLandschaft</Title>
				<FeatureTypeName>RP_NaturLandschaft</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#CAFF70</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#CAFF70</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#CAFF70</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_NaturschutzrechtlichesSchutzgebiet-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_NaturschutzrechtlichesSchutzgebiet</Title>
				<FeatureTypeName>RP_NaturschutzrechtlichesSchutzgebiet</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#006400</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#006400</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#006400</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Wasserschutz-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Wasserschutz</Title>
				<FeatureTypeName>RP_Wasserschutz</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#00688B</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#00688B</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#00688B</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Gewaesser-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Gewaesser</Title>
				<FeatureTypeName>RP_Gewaesser</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#1E90FF</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#1E90FF</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#1E90FF</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Klimaschutz-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Klimaschutzr</Title>
				<FeatureTypeName>RP_Klimaschutz</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#FFD700</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#FFD700</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#FFD700</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>    
      <!--RP_Erholung-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Erholung</Title>
				<FeatureTypeName>RP_Erholung</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#9ACD32</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#9ACD32</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#9ACD32</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_ErneuerbareEnergie-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_ErneuerbareEnergie</Title>
				<FeatureTypeName>RP_ErneuerbareEnergie</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#EEDC82</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#EEDC82</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#EEDC82</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Forstwirtschaft-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Forstwirtschaft</Title>
				<FeatureTypeName>RP_Forstwirtschaft</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#308014</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#308014</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#308014</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Kulturlandschaft-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Kulturlandschaft</Title>
				<FeatureTypeName>RP_Kulturlandschaft</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#FFEC8B</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#FFEC8B</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#FFEC8B</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Landwirtschaft-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Landwirtschaft</Title>
				<FeatureTypeName>RP_Landwirtschaft</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#7FFF00</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#7FFF00</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#7FFF00</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_RadwegWanderweg-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_RadwegWanderweg</Title>
				<FeatureTypeName>RP_RadwegWanderweg</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#548B54</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#548B54</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#548B54</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Sportanlage-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Sportanlage</Title>
				<FeatureTypeName>RP_Sportanlage</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#36648B</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#36648B</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#36648B</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_SonstigerFreiraumschutz-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_SonstigerFreiraumschutz</Title>
				<FeatureTypeName>RP_SonstigerFreiraumschutz</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#98FB98</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#98FB98</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#98FB98</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Rohstoff-->
			<FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Rohstoff</Title>
				<FeatureTypeName>RP_Rohstoff</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8B6508</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8B6508</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8B6508</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Energieversorgung-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Energieversorgung</Title>
				<FeatureTypeName>RP_Energieversorgung</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#B0171F</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#B0171F</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#B0171F</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Entsorgung-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Entsorgung</Title>
				<FeatureTypeName>RP_Entsorgung</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8A360F</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8A360F</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8A360F</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
       <!--RP_Kommunikation-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Kommunikation</Title>
				<FeatureTypeName>RP_Kommunikation</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#515151</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#515151</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#515151</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_LaermschutzBauschutz-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_LaermschutzBauschutz</Title>
				<FeatureTypeName>RP_LaermschutzBauschutz</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#FF8000</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#FF8000</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#FF8000</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_SozialeInfrastruktur-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_SozialeInfrastruktur</Title>
				<FeatureTypeName>RP_SozialeInfrastruktur</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#BC8F8F</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#BC8F8F</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#BC8F8F</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Wasserwirtschaft-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Wasserwirtschaft</Title>
				<FeatureTypeName>RP_Wasserwirtschaft</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#3D59AB</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#3D59AB</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#3D59AB</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_SonstigeInfrastruktur-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_SonstigeInfrastruktur</Title>
				<FeatureTypeName>RP_SonstigeInfrastruktur</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#FF7F50</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#FF7F50</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#FF7F50</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
       <!--RP_Verkehr-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Verkehr</Title>
				<FeatureTypeName>RP_Verkehr</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#848484</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#848484</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#848484</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Strassenverkehr-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Strassenverkehr</Title>
				<FeatureTypeName>RP_Strassenverkehr</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#AAAAAA</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#AAAAAA</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#AAAAAA</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Schienenverkehr-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Schienenverkehr</Title>
				<FeatureTypeName>RP_Schienenverkehr</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8A3324</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8A3324</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8A3324</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Luftverkehr-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Luftverkehr</Title>
				<FeatureTypeName>RP_Luftverkehr</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#B7B7B7</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#B7B7B7</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#B7B7B7</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle> 
      <!--RP_Wasserverkehr-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Wasserverkehr</Title>
				<FeatureTypeName>RP_Wasserverkehr</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#00008B</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#00008B</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#00008B</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
       <!--RP_SonstVerkehr-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_SonstVerkehr</Title>
				<FeatureTypeName>RP_SonstVerkehr</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8B795E</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8B795E</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8B795E</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Raumkategorie-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Raumkategorie</Title>
				<FeatureTypeName>RP_Raumkategorie</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8B2323</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8B2323</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8B2323</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Achse-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Achse</Title>
				<FeatureTypeName>RP_Achse</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8E388E</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8E388E</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8E388E</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Sperrgebiet-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Sperrgebiet</Title>
				<FeatureTypeName>RP_Sperrgebiet</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8B1C62</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8B1C62</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8B1C62</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_ZentralerOrt-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style fürRP_ZentralerOrt</Title>
				<FeatureTypeName>RP_ZentralerOrt</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#FF0000</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#FF0000</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#FF0000</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Funktionszuweisung-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Funktionszuweisung</Title>
				<FeatureTypeName>RP_Funktionszuweisung</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#FF4500</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#FF4500</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#FF4500</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
       <!--RP_Siedlung-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Siedlung</Title>
				<FeatureTypeName>RP_Siedlung</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#F45505</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#F45505</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#F45505</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_WohnenSiedlung-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_WohnenSiedlung</Title>
				<FeatureTypeName>RP_WohnenSiedlung</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#8C000B</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#8C000B</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#8C000B</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_IndustrieGewerbe-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_IndustrieGewerbe</Title>
				<FeatureTypeName>RP_IndustrieGewerbe</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#6B2AFF</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#6B2AFF</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#6B2AFF</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Einzelhandel-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Einzelhandel</Title>
				<FeatureTypeName>RP_Einzelhandel</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#CB41FF</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#CB41FF</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#CB41FF</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
       <!--RP_SonstigerSiedlungsbereich-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_SonstigerSiedlungsbereich</Title>
				<FeatureTypeName>RP_SonstigerSiedlungsbereich</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#E791FF</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#E791FF</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#E791FF</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Grenze-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Grenze</Title>
				<FeatureTypeName>RP_Grenze</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#1E1E1E</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#1E1E1E</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#1E1E1E</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_Planungsraum-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_Planungsraum</Title>
				<FeatureTypeName>RP_Planungsraum</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#C0C0C0</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#C0C0C0</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#C0C0C0</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>
      <!--RP_GenerischesObjekt-->
      <FeatureTypeStyle version="1.1.0">
        <Title>Style für RP_GenerischesObjekt</Title>
				<FeatureTypeName>RP_GenerischesObjekt</FeatureTypeName>
				<Rule>
          <PointSymbolizer>
            <Geometry>
              <ogc:PropertyName>point</ogc:PropertyName>
            </Geometry>
            <Graphic>
              <Mark>
                <WellKnownName>circle</WellKnownName>
                <Fill>
                  <CssParameter name="fill">#FFFF00</CssParameter>
                </Fill>
              </Mark>
              <Size>10</Size>
            </Graphic>
          </PointSymbolizer>
          <LineSymbolizer>
            <Geometry>
              <ogc:PropertyName>line</ogc:PropertyName>
            </Geometry>
            <Stroke>
              <CssParameter name="stroke">#FFFF00</CssParameter>
            </Stroke>
          </LineSymbolizer>
          <PolygonSymbolizer>
            <Geometry>
              <ogc:PropertyName>polygon</ogc:PropertyName>
            </Geometry>
            <Fill>
              <CssParameter name="fill">#FFFF00</CssParameter>
            </Fill>
          </PolygonSymbolizer>
				</Rule>
      </FeatureTypeStyle>      
    </UserStyle>
	</NamedLayer>
</StyledLayerDescriptor>	
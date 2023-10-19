<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
?>

<VAST version="3.0">
    <Ad id="20004">
        <InLine>
            <AdSystem version="4.0">iabtechlab</AdSystem>

            <AdTitle>
                <![CDATA[VAST 4.0 Pilot - Scenario 5]]>
            </AdTitle>
            <Description>
                <![CDATA[This is sample companion ad tag with Linear ad tag. This tag while showing video ad on the player, will show a companion ad beside the player where it can be fitted. At most 3 companion ads can be placed. Modify accordingly to see your own content.]]>
            </Description>

            <Pricing model="cpm" currency="USD">
                <![CDATA[ 25.00 ]]>
            </Pricing>

            <Error>http://example.com/error</Error>
            <Impression id="Impression-ID">http://example.com/track/impression</Impression>

            <Creatives>
                <Creative id="5480" sequence="1">
                    <CompanionAds>
                        <Companion id="1232" width="300" height="250" assetWidth="250" assetHeight="200" expandedWidth="350" expandedHeight="250">
                               <StaticResource creativeType="image/png">
                                <![CDATA[https://www.iab.com/wp-content/uploads/2014/09/iab-tech-lab-6-644x290.png]]>
                                </StaticResource>
                                <CompanionClickThrough>
                                    <![CDATA[https://iabtechlab.com]]>
                                </CompanionClickThrough>
                        </Companion>
                    </CompanionAds>
                </Creative>
                <Creative id="5480" sequence="1">
                    <Linear>
                        <Duration>00:00:16</Duration>
                        <TrackingEvents>
                            <Tracking event="start">http://example.com/tracking/start</Tracking>
                            <Tracking event="firstQuartile">http://example.com/tracking/firstQuartile</Tracking>
                            <Tracking event="midpoint">http://example.com/tracking/midpoint</Tracking>
                            <Tracking event="thirdQuartile">http://example.com/tracking/thirdQuartile</Tracking>
                            <Tracking event="complete">http://example.com/tracking/complete</Tracking>
                            <Tracking event="progress" offset="00:00:10">http://example.com/tracking/progress-10</Tracking>
                        </TrackingEvents>

                        <VideoClicks>
                            <ClickTracking id="blog">
                                <![CDATA[https://iabtechlab.com]]>
                            </ClickTracking>
                        </VideoClicks>

                        <MediaFiles>
                            <MediaFile id="5241" delivery="progressive" type="video/mp4" bitrate="500" width="400" height="300" minBitrate="360" maxBitrate="1080" scalable="1" maintainAspectRatio="1" codec="0">
                                <![CDATA[https://iab-publicfiles.s3.amazonaws.com/vast/VAST-4.0-Short-Intro.mp4]]>
                            </MediaFile>
                        </MediaFiles>
                    </Linear>
                </Creative>

            </Creatives>
            <Extensions>
                <Extension type="iab-Count">
                    <total_available>
                        <![CDATA[ 2 ]]>
                    </total_available>
                </Extension>
            </Extensions>
        </InLine>
    </Ad>
</VAST>
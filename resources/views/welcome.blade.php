@extends('layouts.welcome')

@section('content')
    <div id="site">

        <input type="checkbox" name="mobile-nav-toggle" id="mobileNavToggle" class="mobile-nav-toggle-box hidden" />

       @include('components.indexHeader')

        <div id="siteWrapper" class="clearfix">

            <!-- Banner -->

            <!-- nothing to see here, move along -->

            <main id="page" role="main">
                <div id="content" class="main-content" data-content-field="main-content"
                    data-collection-id="60e6a0c4fb544c02013d66cb">

                    <!-- Create index sections -->

                    <div id="home-section" class="index-section no-main-image page" data-url-id="home"
                        data-collection-id="60e690d1501d3f22da85eee6" data-edit-main-image="Background">
                        <div class="index-section-wrapper has-main-media">

                            <!-- For Pages -->
                            <div class="index-section-image content-fill">

                                <div class="sqs-video-background content-fill" data-config-url="https://vimeo.com/585547408"
                                    data-config-playback-speed="1" data-config-filter="1" data-config-filter-strength="50">

                                    <img data-src="https://images.squarespace-cdn.com/content/v1/60e54653e526b236351f2f2f/1625731174573-0AMZK5KNFI7E3AX1QAUZ/TEST+4.gif"
                                        data-image="https://images.squarespace-cdn.com/content/v1/60e54653e526b236351f2f2f/1625731174573-0AMZK5KNFI7E3AX1QAUZ/TEST+4.gif"
                                        data-image-dimensions="500x281" data-image-focal-point="0.5,0.5" alt="TEST 4.gif"
                                        class="custom-fallback-image" data-load="false" />
                                    <div id="player"></div>
                                </div>
                            </div>
                            <div class="index-image-overlay"></div>

                            <div class="content page-content has-main-media tmpl-loading" id="home-page" data-url-id="home">
                                <div class="content-inner has-content">
                                    <div class="sqs-layout sqs-grid-12 columns-12" data-type="page"
                                        data-updated-on="1654664235443" id="page-60e690d1501d3f22da85eee6">
                                        <div class="row sqs-row">
                                            <div class="col sqs-col-12 span-12">
                                                <div class="sqs-block spacer-block sqs-block-spacer"
                                                    data-aspect-ratio="14.82213438735178" data-block-type="21"
                                                    id="block-yui_3_17_2_1_1654664200303_3020">
                                                    <div class="sqs-block-content">&nbsp;</div>
                                                </div>
                                                <div class="sqs-block html-block sqs-block-html" data-block-type="2"
                                                    data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;"
                                                    id="block-yui_3_17_2_1_1654664018704_6182">
                                                    <div class="sqs-block-content">

                                                        <div class="sqs-html-content">
                                                            <h3 style="white-space:pre-wrap;">CREATING
                                                                <br>EXTRAORDINARY<br>OPPORTUNITIES <br>FOR ARTISTS.</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1"
                                                    data-block-type="21" id="block-yui_3_17_2_1_1625723428155_17850">
                                                    <div class="sqs-block-content">&nbsp;</div>
                                                </div>
                                                <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1"
                                                    data-block-type="21" id="block-yui_3_17_2_1_1628634073619_6424">
                                                    <div class="sqs-block-content">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- For Galleries -->

                            <!-- For Albums -->
                        </div>
                    </div>
                </div>
            </main>

            @include('components.indexFooter')
        </div>
    </div>
@endsection

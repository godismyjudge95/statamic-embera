# Statamic Embera

> A video embed tag using the Embera oEmbed library for Statamic 4+

## Features

This addon allows you to use an `{{ embera }}` tag to embed nearly any video URL with an iframe.
Embera supports embedding a wide variety of online video providers: [https://github.com/mpratt/Embera/blob/master/doc/02-providers.md](https://github.com/mpratt/Embera/blob/master/doc/02-providers.md)

## How to Install

Run the following command from your project root:

``` bash
composer require godismyjudge95/statamic-embera
```

If you want a quick start in styling the iframe you can include the base responsive styles in your `site.css`:
```
import '@/../../vendor/godismyjudge95/statamic-embera/resources/css/addon.css';
```

## How to Use

Simply use the embera tag with a video url:
```
{{ embera src="https://www.youtube.com/watch?v=dQw4w9WgXcQ" height="600" width="" responsive="true" class="mx-auto" }}
```

Outputs:
```
<iframe class="embera-embed-responsive-item embera-embed-responsive-item-video" src="https://www.youtube.com/embed/dQw4w9WgXcQ?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
```

To see all the possible parameters see the Embera documentation:
[https://github.com/mpratt/Embera/blob/master/doc/01-usage.md#passing-configuration-options](https://github.com/mpratt/Embera/blob/master/doc/01-usage.md#passing-configuration-options)

All the attributes passed to the Embera tag are passed through to the Embera class instance.

## Thanks

Many thanks to mpratt and the contributors of Embera - [https://github.com/mpratt/Embera](https://github.com/mpratt/Embera)

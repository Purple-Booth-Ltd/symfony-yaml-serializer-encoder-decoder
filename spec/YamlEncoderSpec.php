<?php

namespace spec\Fitbug\SymfonySerializer\YamlEncoderDecoder;

use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlDecode;
use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlEncode;
use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlEncoder;
use PhpSpec\ObjectBehavior;

class YamlEncoderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(YamlEncoder::class);
    }

    function it_proxies_the_supports_decoding_method(YamlDecode $yamlDecode)
    {
        $yamlDecode->supportsDecoding('banana')->willReturn(true);
        $this->beConstructedWith(null, $yamlDecode);
        $this->supportsDecoding('banana')->shouldReturn(true);
    }


    function it_proxies_the_decoding(YamlDecode $yamlDecode)
    {
        $yamlDecode->decode('obst', 'banana', [])->willReturn(true);
        $this->beConstructedWith(null, $yamlDecode);
        $this->decode('obst', 'banana')->shouldReturn(true);
    }


    function it_proxies_the_supports_encoding_method(YamlEncode $yamlEncode)
    {
        $yamlEncode->supportsEncoding('banana')->willReturn(true);
        $this->beConstructedWith($yamlEncode);
        $this->supportsEncoding('banana')->shouldReturn(true);
    }

    function it_proxies_the_encoding(YamlEncode $yamlEncode)
    {
        $yamlEncode->encode('obst', 'banana', [])->willReturn(true);
        $this->beConstructedWith($yamlEncode);
        $this->encode('obst', 'banana')->shouldReturn(true);
    }
}

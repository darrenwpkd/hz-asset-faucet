@extends('layouts.master')

@section('content')
            <div class="span12">
            <h1 class="page_title">Get a Horizon ID</h1>
            <p>To get a Horizon account ID, you'll need to get logged into the netwwork. All accounts on the Horizon Platform are live in the blockchain. We recommend you run a client yourself, but if this isn't possible, you have the option of using a thin or web client. Fund your account ID once, and your account will be immediately secured by world-class 256 bit security.</p>
            </div>
            <div class="row text-center">

                <div class="span4">
                    <div class="circle_icon team_description"><i class="fa fa-cloud-download" style="font-size: 400%;"></i></div>
                    <h2><a href="http://files.nhzcrypto.org/binaries/nhz_v3.2.1.zip">Full Client</a></h2>
                    <p class="display">Allows you to forge Horizon but requires storing the blockchain. This is the recommended wallet.</p>
                </div>
                <div class="span4">
                    <div class="circle_icon team_description"><i class="fa fa-cloud-download" style="font-size: 400%;"></i></div>
                    <h2><a href="http://files.nhzcrypto.org/binaries/nhz_v3.2.1_thinclient.zip">Thin Client</a></h2>
                    <p class="display">Very low system requirements but you won't be able to forge your own coins. You won't need to store the blockchain.</p>
                </div>
                <div class="span4">
                    <div class="circle_icon team_description"><i class="fa fa-cloud-download" style="font-size: 400%;"></i></div>
                    <h2><a href="http://files.nhzcrypto.org/binaries/nhz_v3.2.1_api.zip">Node Client</a></h2>
                    <p class="display">A full client, preconfigured for usage as a public NHZ node. Requires some setup and is suitable for experts only.</p>
                </div>

            </div>

            <div class="row text-center">

                <div class="span4">
                    <div class="circle_icon team_description"><i class="fa fa-cloud-download" style="font-size: 400%;"></i></div>
                    <h2><a href="//account.horizonplatform.io" target="_blank">Web Client</a></h2>
                    <p class="display">Requires no local storage, but cannot forge and requires trusting the provider of the service.</p>
                </div>
                <div class="span4">
                    <div class="circle_icon team_description"><i class="fa fa-cloud-download" style="font-size: 400%;"></i></div>
                    <h2><a href="https://github.com/NeXTHorizon" target="_blank">Source Code</a></h2>
                    <p class="display">Horizon are committed to releasing all development open source. You can download all our client code from our Github account.</p>
                </div>
                <div class="span4">
                    <div class="circle_icon team_description"><i class="fa fa-cloud-download" style="font-size: 400%;"></i></div>
                    <h2><a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk7-downloads-1880260.html" target="_blank">Download Java</a></h2>
                    <p class="display">The Horizon Platform runs on Java 7. Download and install the Java 7 JRE from Oracle's website.</p>
                </div>

            </div>
@stop
@extends('layout')
@section('title') Docs @endsection
@section('main')
    <section class="docs">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 id="intro">INTRODUCTION</h3>
                    <p>Veriphone API is a <a href="https://en.wikipedia.org/wiki/Representational_state_transfer" target="blank">REST</a> based JSON API.
                        It provides a set of <a href="https://en.wikipedia.org/wiki/Stateless_protocol" target="blank">stateless</a>
                        endpoints that any program or web browser can call by sending a standard HTTP request. Veriphone will respond with a standard
                        HTTP response carrying a <a href="https://en.wikipedia.org/wiki/JSON" target="blank">JSON</a> payload.
                        This documentation describes these endpoints, their input/output parameters and authentication methods.</p>

                    <hr id="auth">

                    <h3 id="auth">AUTHENTICATION</h3>
                    <p>Veriphone API uses API keys to authenticate requests. You can view and manage your API key in your <a href="https://veriphone.io/cp#account" target="blank">control panel</a>.</p>
                    <p>Requests carrying your API key will deduct 1 credit from your balance, so be sure to keep your key secure! Do not share it in publicly accessible areas such as GitHub or client-side code.</p>
                    <p>API requests without a valid API key will fail.</p>
                    <strong>Example</strong>
                    <pre><code>https://api.veriphone.io/v2/verify?<span class="yellow">key=712E59151C8B4D1DB593D43678ABBF47</span></code></pre>

                    <hr id="errors">

                    <h3>ERRORS</h3>
                    <p>Veriphone uses <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes" target="blank">standard HTTP status codes</a> to indicate the success or failure of a request.
                        Successful requests will receive a <code>200</code> response code, while responses with a <code>40x</code> or <code>500</code> indicate a failure.
                    </p>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>400<br><span class="txt-sm grey">Bad request</span></td>
                            <td>Returned if a required input parameter is missing or not valid.</td>
                        </tr>
                        <tr>
                            <td>401<br><span class="txt-sm grey">Unauthorized</span></td>
                            <td>Returned if the <code>key</code> parameter is missing or not valid.</td>
                        </tr>
                        <tr>
                            <td>402<br><span class="txt-sm grey">Payment required</span></td>
                            <td>Returned if no credits are available to cover the cost of the requested operation.</td>
                        </tr>
                        <tr>
                            <td>403<br><span class="txt-sm grey">Forbiden</span></td>
                            <td>Returned if access is not granted to the requested resource.</td>
                        </tr>
                        <tr>
                            <td>500<br><span class="txt-sm grey">Server error</span></td>
                            <td>Indicates a failure on veriphone servers. Although these are rare, if you get one please report it to support@veriphone.io</td>
                        </tr>
                        </tbody>
                    </table>

                    <hr id="verify">
                    <h3>VERIFY</h3>
                    <p>Veriphone's <code>/v2/verify</code> endpoint takes a phone number and an optional default-country as input, and tells you if the number is valid.</p>
                    <p>For valid numbers, it will also return the number's type (mobile, land line, toll free, etc...) the carrier and other fields as described in the output section bellow.</p>
                    <p>If the number does not start with a country prefix, indicated by a leading '+', the number will be cheked against the default-country's numbering scheme.
                        If no default-country is provided, a country will be infered from the IP address originating the request.</p>
                    <h5 id="url">URL</h5>
                    <pre><code>https://api.veriphone.io/v2/verify</code></pre>
                    <h5 id="method">Method <code>GET</code>&nbsp;<code>POST</code></h5>
                    <h5 id="input">Input</h5>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>key<br><span class="txt-sm grey">String</span></td>
                            <td>Authentication key</td>
                        </tr>
                        <tr>
                            <td>phone<br><span class="txt-sm grey">String</span></td>
                            <td>A phone number</td>
                        </tr>
                        <tr>
                            <td>default_country<br><span class="txt-sm grey">2 characters</span></td>
                            <td>The default country in a <a href="/docs/countries" target="_blank">2 letters ISO code format</a>. Example: <code>US</code>, <code>RU</code>. <br>Optional: the country will be infered from the prefix, from this parameter or from the IP address (in that order).</td>
                        </tr>
                        </tbody>
                    </table>
                    <h5 id="output">Output</h5>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>status<br><span class="txt-sm grey">String</span></td>
                            <td>Status indicating the success or failure of the request execution.
                                Values: <code>success</code>, <code>error</code></td>
                        </tr>
                        <tr>
                            <td>phone<br><span class="txt-sm grey">String</span></td>
                            <td>The phone number provided as input.</td>
                        </tr>
                        <tr>
                            <td>phone_valid<br><span class="txt-sm grey">true/false</span></td>
                            <td>True if the phone number provided is valid.</td>
                        </tr>
                        <tr>
                            <td>phone_type<br><span class="txt-sm grey">String</span></td>
                            <td>The phone number's type. Values: <code>fixed_line</code>, <code>mobile</code>, <code>unknown</code>, <code>fixed_line_or_mobile</code>, <code>toll_free</code>, <code>premium_rate</code>, <code>shared_cost</code>, <code>voip</code></td>
                        </tr>
                        <tr>
                            <td>phone_region<br><span class="txt-sm grey">String</span></td>
                            <td>Country region corresponding to the phone number. Empty for mobile numbers.</td>
                        </tr>
                        <tr>
                            <td>country<br><span class="txt-sm grey">String</span></td>
                            <td>Name of the country corresponding to the phone number.
                                Example: <code>Canada</code>, <code>Netherland</code>
                            </td>
                        </tr>
                        <tr>
                            <td>country_code<br><span class="txt-sm grey">2 characters</span></td>
                            <td><a href="/docs/countries" target="_blank">2 letters ISO code</a> of the country corresponding to the phone number.
                                Example: <code>CA</code>,<code>NL</code>
                            </td>
                        </tr>
                        <tr><td>country_prefix<br><span class="txt-sm grey">String</span></td>
                            <td>International country dialing code. Example: <code>32</code>, <code>971</code></td>
                        </tr>
                        <tr>
                            <td>international_number<br><span class="txt-sm grey">String</span></td>
                            <td>The phone number in the intenational format, with a leading + sign. Example: <code>+49 1512 3577723</code>
                            </td>
                        </tr>
                        <tr>
                            <td>local_number<br><span class="txt-sm grey">String</span></td>
                            <td>The phone number in local dialing format. Example: <code>01512 3577723</code></td>
                        </tr>
                        <tr>
                            <td>e164<br><span class="txt-sm grey">String</span></td>
                            <td>The phone number in standard <a href="https://en.wikipedia.org/wiki/E.164" target="_blank">E164</a> format, with a leading + sign. Example: <code>+4915123577723</code>
                            </td>
                        </tr><tr>
                            <td>carrier<br><span class="txt-sm grey">String</span></td>
                            <td>Name of the carrier providing the phone number.</td>
                        </tr>
                        </tbody>
                    </table>
                    <h5 id="request">Request</h5>
                    <pre><code>https://api.veriphone.io/v2/verify?phone=%2B49-15123577723&amp;key=266B0091BC9547A2A40DD088795FA4C6</code></pre>
                    <h5 id="response">Response</h5>
                    <pre class=" language-js"><code class=" language-js"><span class="token punctuation">{</span>
  <span class="token string">"status"</span><span class="token operator">:</span> <span class="token string">"success"</span><span class="token punctuation">,</span>
  <span class="token string">"phone"</span><span class="token operator">:</span> <span class="token string">"+49-15123577723"</span><span class="token punctuation">,</span>
  <span class="token string">"phone_valid"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
  <span class="token string">"phone_type"</span><span class="token operator">:</span> <span class="token string">"mobile"</span><span class="token punctuation">,</span>
  <span class="token string">"phone_region"</span><span class="token operator">:</span> <span class="token string">"Germany"</span><span class="token punctuation">,</span>
  <span class="token string">"country"</span><span class="token operator">:</span> <span class="token string">"Germany"</span><span class="token punctuation">,</span>
  <span class="token string">"country_code"</span><span class="token operator">:</span> <span class="token string">"DE"</span><span class="token punctuation">,</span>
  <span class="token string">"country_prefix"</span><span class="token operator">:</span> <span class="token string">"49"</span><span class="token punctuation">,</span>
  <span class="token string">"international_number"</span><span class="token operator">:</span> <span class="token string">"+49 1512 3577723"</span><span class="token punctuation">,</span>
  <span class="token string">"local_number"</span><span class="token operator">:</span> <span class="token string">"01512 3577723"</span><span class="token punctuation">,</span>
  <span class="token string">"e164"</span><span class="token operator">:</span> <span class="token string">"+4915123577723"</span><span class="token punctuation">,</span>
  <span class="token string">"carrier"</span><span class="token operator">:</span> <span class="token string">"T-Mobile"</span>
<span class="token punctuation">}</span></code></pre>

                    <hr id="example">
                    <h3>EXAMPLE</h3>
                    <p>Veriphone's <code>/v2/example</code> endpoint returns an example (dummy) phone number for any country/phone-type combination.</p>
                    <p>The country and phone type are optional. If no country is specified , a country will be infered from the IP address originating the request.</p>
                    <p>If no phone type is specified, 'mobile' will be used as default type</p>
                    <h5 id="url">URL</h5>
                    <pre><code>https://api.veriphone.io/v2/example</code></pre>
                    <h5 id="method">Method <code>GET</code>&nbsp;<code>POST</code></h5>
                    <h5 id="input">Input</h5>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>key<br><span class="txt-sm grey">String</span></td>
                            <td>Authentication key</td>
                        </tr>
                        <tr>
                            <td>type<br><span class="txt-sm grey">String</span></td>
                            <td>The type of example number to return. Values: <code>fixed_line</code>, <code>mobile</code>
                                , <code>premium_rate</code>, <code>shared_cost</code>, <code>toll_free</code>, <code>voip</code><br>Optional: will default to <code>mobile</code></td>

                        </tr>
                        <tr>
                            <td>country_code<br><span class="txt-sm grey">2 characters</span></td>
                            <td>The example number's country in a <a href="/docs/countries" target="_blank">2 letters ISO format</a>. Example: <code>US</code>, <code>RU</code>. <br>Optional: the country will be infered from the IP address if this parameter is absent or invalid.</td>
                        </tr>
                        </tbody>
                    </table>
                    <h5 id="output">Output</h5>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>status<br><span class="txt-sm grey">String</span></td>
                            <td>Status indicating the success or failure of the request execution.
                                Values: <code>success</code>, <code>error</code></td>
                        </tr>
                        <tr>
                            <td>phone_type<br><span class="txt-sm grey">String</span></td>
                            <td>The example phone number's type. Values: <code>fixed_line</code>, <code>mobile</code>, <code>toll_free</code>, <code>premium_rate</code>, <code>shared_cost</code>, <code>voip</code></td>
                        </tr>
                        <tr>
                            <td>country_code<br><span class="txt-sm grey">2 characters</span></td>
                            <td><a href="/docs/countries" target="_blank">2 letters ISO code</a> of the country corresponding to the phone number.
                                Example: <code>CA</code>,<code>NL</code>
                            </td>
                        </tr>
                        <tr><td>country_prefix<br><span class="txt-sm grey">String</span></td>
                            <td>International country dialing code. Example: <code>32</code>, <code>971</code></td>
                        </tr>
                        <tr>
                            <td>international_number<br><span class="txt-sm grey">String</span></td>
                            <td>The example phone number in the intenational format, with a leading + sign. Example: <code>+49 1512 3577723</code>
                            </td>
                        </tr>
                        <tr>
                            <td>local_number<br><span class="txt-sm grey">String</span></td>
                            <td>The example phone number in local dialing format. Example: <code>01512 3577723</code></td>
                        </tr>
                        <tr>
                            <td>e164<br><span class="txt-sm grey">String</span></td>
                            <td>The example phone number in standard <a href="https://en.wikipedia.org/wiki/E.164" target="_blank">E164</a> format, with a leading + sign. Example: <code>+4915123577723</code>
                            </td>
                        </tr></tbody>
                    </table>
                    <h5 id="request">Request</h5>
                    <pre><code>https://api.veriphone.io/v2/example?type=fixed_line&amp;country_code=FR&amp;key=266B0091BC9547A2A40DD088795FA4C6</code></pre>
                    <h5 id="response">Response</h5>
                    <pre class=" language-js"><code class=" language-js"><span class="token punctuation">{</span>
  <span class="token string">"status"</span><span class="token operator">:</span> <span class="token string">"success"</span><span class="token punctuation">,</span>
  <span class="token string">"phone_type"</span><span class="token operator">:</span> <span class="token string">"fixed_line"</span><span class="token punctuation">,</span>
  <span class="token string">"country_code"</span><span class="token operator">:</span> <span class="token string">"FR"</span><span class="token punctuation">,</span>
  <span class="token string">"country_prefix"</span><span class="token operator">:</span> <span class="token string">"33"</span><span class="token punctuation">,</span>
  <span class="token string">"international_number"</span><span class="token operator">:</span> <span class="token string">"+33 1 23 45 67 89"</span><span class="token punctuation">,</span>
  <span class="token string">"local_number"</span><span class="token operator">:</span> <span class="token string">"01 23 45 67 89"</span><span class="token punctuation">,</span>
  <span class="token string">"E164"</span><span class="token operator">:</span> <span class="token string">"+33123456789"</span>
<span class="token punctuation">}</span></code></pre>
                </div>
                <div class="col-md-3">
                    <ul id="sticky" class="sticky">
                        <li class="mb-2"><a href="/docs">API Documentation</a></li>
                        <li class="mb-2"><a href="/docs/countries">Supported Countries</a></li>
                        <div class="h-sep"></div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layout')
@section('title') Countries @endsection
@section('main')
    <section class="docs">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <table class="table table-striped">
                        <tbody>
                        <tr><th>Country</th><th>ISO Code</th><th>Dial Code</th></tr>
                        <tr><td>Afghanistan</td><td>AF</td><td>+93</td></tr>
                        <tr><td>Åland Islands</td><td>AX</td><td>+358</td></tr>
                        <tr><td>Albania</td><td>AL</td><td>+355</td></tr>
                        <tr><td>Algeria</td><td>DZ</td><td>+213</td></tr>
                        <tr><td>American Samoa</td><td>AS</td><td>+1-684</td></tr>
                        <tr><td>Andorra</td><td>AD</td><td>+376</td></tr>
                        <tr><td>Angola</td><td>AO</td><td>+244</td></tr>
                        <tr><td>Anguilla</td><td>AI</td><td>+1-264</td></tr>
                        <tr><td>Antarctica</td><td>AQ</td><td>+672</td></tr>
                        <tr><td>Antigua &amp; Barbuda</td><td>AG</td><td>+1-268</td></tr>
                        <tr><td>Argentina</td><td>AR</td><td>+54</td></tr>
                        <tr><td>Armenia</td><td>AM</td><td>+374</td></tr>
                        <tr><td>Aruba</td><td>AW</td><td>+297</td></tr>
                        <tr><td>Australia</td><td>AU</td><td>+61</td></tr>
                        <tr><td>Austria</td><td>AT</td><td>+43</td></tr>
                        <tr><td>Azerbaijan</td><td>AZ</td><td>+994</td></tr>
                        <tr><td>Bahamas</td><td>BS</td><td>+1-242</td></tr>
                        <tr><td>Bahrain</td><td>BH</td><td>+973</td></tr>
                        <tr><td>Bangladesh</td><td>BD</td><td>+880</td></tr>
                        <tr><td>Barbados</td><td>BB</td><td>+1-246</td></tr>
                        <tr><td>Belarus</td><td>BY</td><td>+375</td></tr>
                        <tr><td>Belgium</td><td>BE</td><td>+32</td></tr>
                        <tr><td>Belize</td><td>BZ</td><td>+501</td></tr>
                        <tr><td>Benin</td><td>BJ</td><td>+229</td></tr>
                        <tr><td>Bermuda</td><td>BM</td><td>+1-441</td></tr>
                        <tr><td>Tuvalu</td><td>TV</td><td>+688</td></tr>
                        <tr><td>U.S. Virgin Islands</td><td>VI</td><td>+1-340</td></tr>
                        <tr><td>Uganda</td><td>UG</td><td>+256</td></tr>
                        <tr><td>UK</td><td>GB</td><td>+44</td></tr>
                        <tr><td>Ukraine</td><td>UA</td><td>+380</td></tr>
                        <tr><td>United Arab Emirates</td><td>AE</td><td>+971</td></tr>
                        <tr><td>Uruguay</td><td>UY</td><td>+598</td></tr>
                        <tr><td>US</td><td>US</td><td>+1</td></tr>
                        <tr><td>Uzbekistan</td><td>UZ</td><td>+998</td></tr>
                        <tr><td>Vanuatu</td><td>VU</td><td>+678</td></tr>
                        <tr><td>Vatican City</td><td>VA</td><td>+39-06</td></tr>
                        <tr><td>Venezuela</td><td>VE</td><td>+58</td></tr>
                        <tr><td>Vietnam</td><td>VN</td><td>+84</td></tr>
                        <tr><td>Wallis &amp; Futuna</td><td>WF</td><td>+681</td></tr>
                        <tr><td>Yemen</td><td>YE</td><td>+967</td></tr>
                        <tr><td>Zambia</td><td>ZM</td><td>+260</td></tr>
                        <tr><td>Zimbabwe</td><td>ZW</td><td>+263</td></tr>


                        </tbody></table>
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

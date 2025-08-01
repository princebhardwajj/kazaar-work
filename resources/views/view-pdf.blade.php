<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Packing Slip</title>

    <style>
        @font-face {
            font-family: 'Futura';
            font-weight: 300;
            font-style: normal;
            src: url('{{ public_path('storage/fonts/futura_n3.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Futura';
            font-weight: 400;
            font-style: normal;
            src: url('{{ public_path('storage/fonts/futura_n4.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Futura';
            font-weight: 500;
            font-style: normal;
            src: url('{{ public_path('storage/fonts/futura_n5.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Futura';
            font-weight: 700;
            font-style: normal;
            src: url('{{ public_path('storage/fonts/futura_n7.ttf') }}') format('truetype');
        }

        @page {
            margin: 0cm;
        }

        body {
            margin: 0cm;
            padding: 0cm;
        }

        body {
            font-family: 'Futura', Arial, sans-serif;
            /* margin: 40px; */
            font-size: 14px;
            color: #000;
        }

        h1 {
            text-align: left;
            font-size: 18px;
        }

        p {
            margin: 0px;
        }

        .section {
            margin-bottom: 30px;
        }

        .two-column {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .column {
            width: 48%;
        }

        .bold {
            font-weight: bold;
        }

        .item-list {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .item-list td {
            padding: 6px 0;
            border-bottom: 1px solid #ccc;
        }

        .footer {
            margin-top: 40px;
            text-align: left;
            font-size: 13px;
        }

        .footer p {
            margin: 5px 0;
        }

        .page-break {
            page-break-after: always;
        }

        .page-break-inside-avoid {
            page-break-inside: avoid;
        }
    </style>
</head>

<body>
    @php
        $order = [
            'saleOrderProducts' => [
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => 'ANTINOOS 50ml',
                    ],
                    'varient' => [
                        'title' => '50ml / 20%',
                    ],
                    'quantity' => 1,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => 'POSEIDON 30ml',
                    ],
                    'varient' => [
                        'title' => '50ml / 20%',
                    ],
                    'quantity' => 2,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => 'HEPHAISTOS 50ml',
                    ],
                    'varient' => [
                        'title' => '50ml / 20%',
                    ],
                    'quantity' => 3,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => 'HEPHAISTOS 50ml',
                    ],
                    'varient' => [
                        'title' => '50ml / 20%',
                    ],
                    'quantity' => 3,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => 'HEPHAISTOS 50ml',
                    ],
                    'varient' => [
                        'title' => '50ml / 20%',
                    ],
                    'quantity' => 3,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => 'HEPHAISTOS 50ml',
                    ],
                    'varient' => [
                        'title' => '50ml / 20%',
                    ],
                    'quantity' => 3,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => 'HEPHAISTOS 50ml',
                    ],
                    'varient' => [
                        'title' => '50ml / 20%',
                    ],
                    'quantity' => 3,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => '5ER bundle',
                    ],
                    'varient' => [
                        'title' => 'ajax, antinoos, achilles, poseidon, hephaistos',
                    ],
                    'quantity' => 3,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => '5ER bundle',
                    ],
                    'varient' => [
                        'title' => 'ajax, antinoos, achilles, poseidon, hephaistos',
                    ],
                    'quantity' => 3,
                ],
                [
                    'product' => [
                        'image' =>
                            'https://cdn.shopify.com/s/files/1/0252/2723/1283/files/hephaistos-50-391897.jpg?v=1750125018',
                        'product_name' => '5ER bundle',
                    ],
                    'varient' => [
                        'title' => 'ajax, antinoos, achilles, poseidon, hephaistos',
                    ],
                    'quantity' => 3,
                ],
            ],
        ];
        $items = $order['saleOrderProducts'];
        $chunks = array_chunk($items, 7);
    @endphp
    @foreach ($chunks as $chunkIndex => $chunk)
        <div style="position: relative">
            <table style="width: 99%">
                <tbody>
                    <tr>
                        <td style="width: 50%; padding-right: 20px; vertical-align: top; position: relative;">
                            <div style="margin: 40px 0px 40px 40px;">
                                {{-- <div class="main-header">
                                    <div class="section" style="margin-bottom: 10px">
                                        <table width="100%">
                                            <tr>
                                                <td width="100%"
                                                    style="vertical-align: top; justify-content: center; outline: 1px solid #D5D5D5">
                                                    <p>Testwrite checking How many character are fitting in this BOX I need this p ackaigng within the fastest possible way please majke sure its bla bla bla Testwrite checking How many character are fitting in this BOX I need this p ackaigng within the fas</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div> --}}
                                <div class="section">
                                    <table class="item-list" style="margin: 0px">
                                        {{-- <tr>
                                            <td></td>
                                            <td class="bold">ARTIKEL</td>
                                            <td class="bold">MENGE</td>
                                        </tr> --}}
                                        @forelse ($chunk as $item)
                                            <tr>
                                                <td style="width: 12%"><img
                                                        src={{ $item['product']['image'] . '&width=50' ?? '' }}
                                                        width="35px" alt="{{ $item['name'] ?? '' }}"></td>
                                                <td style="widows: 74%;">
                                                    <div><strong>{{ $item['product']['product_name'] ?? '--' }}</strong>
                                                    </div>
                                                    <div>{{ $item['varient']['title'] ?? '--' }}</div>

                                                </td>
                                                <td style="width:14%;">
                                                    <div style="text-align: right;">
                                                        <strong>{{ $item['quantity'] ?? '--' }} von
                                                            {{ $item['quantity'] ?? '--' }}</strong>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="2" class="text-center pd">
                                                    <h6>No Product Found !</h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </table>
                                </div>
                                <div class="main-footer" style="position: absolute; bottom: 0px">
                                    <div style="section">
                                        <table width="100%">
                                            <tr style="margin: 0px 100px">
                                                <td
                                                    style="vertical-align: top; width: 5%; text-align: center; font-size: 11px;">
                                                </td>
                                                <td
                                                    style="vertical-align: top; width: 30%; text-align: center; font-size: 11px;">
                                                    <div style="text-align: center">
                                                        <img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/kazaar-qr-gewinnen.jpg"
                                                            alt="qrcode" width="75" />
                                                    </div>
                                                    <p><strong>200€ Gewinnen!</strong></p>
                                                    <p>Lasse eine Bewertung da & gewinne 200€. Jede Woche wird
                                                        ausgelost.</p>
                                                </td>
                                                <td
                                                    style="vertical-align: top; width: 30%; text-align: center; font-size: 11px;">
                                                    <div style="text-align: center">
                                                        <img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/kazaar-qr-exclusive-whatsapp.jpg"
                                                            alt="qrcode" width="75" />
                                                    </div>
                                                    <p><strong>Exclusiver Whatsapp Club</strong></p>
                                                    <p>Kostenloser exklusiver Zugang. Insights vor allen anderen. Nur in
                                                        unserem
                                                        Kanal.</p>
                                                </td>
                                                <td
                                                    style="vertical-align: top; width: 30%;text-align: center; font-size: 11px;">
                                                    <div style="text-align: center">
                                                        <img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/kazaar-qr-support.jpg"
                                                            alt="qrcode" width="75" />
                                                    </div>
                                                    <p><strong>Kundensupport</strong></p>
                                                    <p>Hast du ein Problem bei deiner Bestellung? Keine Panik, unser
                                                        Support ist
                                                        da.</p>
                                                </td>
                                                <td
                                                    style="vertical-align: top; width: 5%; text-align: center; font-size: 11px;">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="footer" style="margin-top: 5px">
                                        <p><strong>KAZAAR LLC</strong></p>
                                        <p>254 Chapman Rd, Ste 208 #15427 Newark, Delaware 19702 USA</p>
                                        <p><strong>info@kazaarfragrances.com / <a
                                                    href="https://www.kazaarfragrances.com"
                                                    style="text-decoration: none; color:#000;">www.kazaarfragrances.com</a></strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td style="width: 50%; padding-left: 20px; vertical-align: top;">
                            {{-- @if ($chunkIndex == 0)
                            <td style="width: 50%; padding-left: 20px; vertical-align: top;">
                            @else
                                <td style="width: 50%; padding-left: 20px; vertical-align: top; height: 15cm">  
                            @endif --}}
                            <div style="margin: 40px 40px 0px 0px;">
                                <div class="section" style="margin-bottom: 10px">
                                    <table width="100%">
                                        <tr>
                                            <td width="40%" style="vertical-align: top; justify-content: center">
                                                <img src="https://www.kazaarfragrances.com/cdn/shop/files/kazaar_schrift_in_schwarz.png?v=1679006536&width=100"
                                                    alt="kazaar">
                                                <div style="margin-top: 5px"><strong>Bestellung
                                                        #405927</strong><br><span>19 Apr
                                                        2025</span></div>
                                                <div style="margin-top: 5px">
                                                <table>
                                                    <tr>
                                                        <td><img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/green-dot.png?v=1754042403"
                                                                alt="green-dot" width="18" /></td>
                                                        <td><strong>First-Time Buyer (1)</strong></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div>
                                                <table>
                                                    <tr>
                                                        <td><img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/package-icon.png?v=1754042402"
                                                                alt="gpackage-icon" width="18" /></td>
                                                        <td><strong>Packaging size: Small</strong></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            </td>
                                            <td width="30%" style="vertical-align: top; justify-content: center">
                                                <div style="text-align: left; float: center">
                                                    <p><strong>VERSAND AN</strong></p>
                                                    <p>
                                                        Treede Janine<br>
                                                        Bahnhofstraße 3<br>
                                                        24960 Glücksburg<br>
                                                        Deutschland
                                                    </p>
                                                </div>
                                            </td>
                                            <td width="30%" style="vertical-align: top; text-align: right">
                                                <div style="text-align: left; float: right">
                                                    <p><strong>RECHNUNG AN</strong></p>
                                                    <p>
                                                        Treede Janine<br>
                                                        Bahnhofstraße 3<br>
                                                        24960 Glücksburg<br>
                                                        Deutschland
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                @if ($chunkIndex == 0)
                                    <div class="section" style="text-align: right">
                                        <img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/label-sticker.jpg?v=1753940474"
                                            alt="slip sticker"
                                            style="width: 10.05cm; height: 15cm;border: 0.5px solid #000" />
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            @if ($loop->first)
                <div style="position: absolute; bottom: 10%; left:48%; ">
                    <img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/Ellipse_1.jpg?v=1754029847"
                        alt="stamp" />
                </div>
            @endif
        </div>
        @if (!$loop->last)
            <div class="page-break"></div>
        @endif
    @endforeach

</body>

</html>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Packing Slip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
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
    </style>
</head>

<body>
    @php
        $order = [
            'saleOrderProducts' => [
                [
                    'product' => [
                        'image' => 'https://placehold.co/50?text=ANTINOOS',
                        'product_name' => 'ANTINOOS 50ml',
                    ],
                    'varient' => [
                        'title' => '20%',
                    ],
                    'quantity' => 1,
                ],
                [
                    'product' => [
                        'image' => 'https://placehold.co/50?text=POSEIDON',
                        'product_name' => 'POSEIDON 30ml',
                    ],
                    'varient' => [
                        'title' => '30%',
                    ],
                    'quantity' => 2,
                ],
                [
                    'product' => [
                        'image' => 'https://placehold.co/50?text=HEPHAISTOS',
                        'product_name' => 'HEPHAISTOS 50ml',
                    ],
                    'varient' => [
                        'title' => '50%',
                    ],
                    'quantity' => 3,
                ],
                [
                    'product' => [
                        'image' => 'https://placehold.co/50?text=HEPHAISTOS',
                        'product_name' => 'HEPHAISTOS 50ml',
                    ],
                    'varient' => [
                        'title' => '50%',
                    ],
                    'quantity' => 3,
                ],
            ],
        ];

    @endphp
    <table style="width: 100%">
        <tr>
            <td style="width: 50%; padding-right: 20px; vertical-align: top;">
                <div class="section">
                    <table width="100%">
                        <tr>
                            <td width="100%"
                                style="vertical-align: top; justify-content: center; border: 1px solid #D5D5D5">
                                <p>Testwrite checking How many character are fitting in this BOX.
                                    I need this p ackaigng within the fastest possible way..... please majke sure its
                                    bla bla bla. Testwrite checking How many character are fitting in this BOX. I need
                                    this p ackaigng within the fastest possible way..... please majke sure its bla bla
                                    bla.Testwrite checking How many character are fitting in this BOX. I need this p
                                    ackaigng within the fastest possible way..... please majke sure its bla bla bla.</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="section">
                    <table class="item-list">
                        <tr>
                            <td></td>
                            <td class="bold">ARTIKEL</td>
                            <td class="bold">MENGE</td>
                        </tr>
                        @forelse ($order['saleOrderProducts'] as $item)
                            <tr>
                                <td><img src={{ $item['product']['image'] . '&width=50' ?? '' }} width="50px"
                                        alt="{{ $item['name'] ?? '' }}"></td>
                                <td> {{ $item['product']['product_name'] ?? '--' }} -
                                    {{ $item['varient']['title'] ?? '--' }}
                                </td>
                                <td>{{ $item['quantity'] ?? '--' }}</td>
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
                <div style="section">
                    <table width="100%">
                        <tr style="margin: 0px 100px">
                            <td style="vertical-align: top; width: 9%; text-align: center; font-size: 11px;"></td>
                            <td style="vertical-align: top; width: 27%; text-align: center; font-size: 11px;">
                                <div style="text-align: center">
                                    <img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/qr-code-kazaar-slip.png?v=1753871823" alt="qrcode" width="50" />
                                </div>
                                <p ><strong>200€ Gewinnen!</strong></p>
                                <p>Lasse eine Bewertung da & gewinne 200€. Jede Woche wird ausgelost.</p>
                            </td>
                            <td style="vertical-align: top; width: 27%; text-align: center; font-size: 11px;">
                                <div style="text-align: center">
                                    <img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/qr-code-kazaar-slip.png?v=1753871823" alt="qrcode" width="50" />
                                </div>
                                <p ><strong>Exclusiver Whatsapp Club</strong></p>
                                <p>Kostenloser exklusiver Zugang. Insights vor allen anderen. Nur in unserem Kanal.</p>
                            </td>
                            <td style="vertical-align: top; width: 27%;text-align: center; font-size: 11px;">
                                <div style="text-align: center">
                                    <img src="https://cdn.shopify.com/s/files/1/0825/2224/3394/files/qr-code-kazaar-slip.png?v=1753871823" alt="qrcode" width="50" />
                                </div>
                                <p><strong>Kundensupport</strong></p>
                                <p>Hast du ein Problem bei deiner Bestellung? Keine Panik, unser Support ist da.</p>
                            </td>
                            <td style="vertical-align: top; width: 9%; text-align: center; font-size: 11px;"></td>
                        </tr>
                    </table>
                </div>
                <div class="footer">
                    <p><strong>KAZAAR LLC</strong></p>
                    <p>254 Chapman Rd, Ste 208 #15427 Newark, Delaware 19702 USA</p>
                    <p><strong>info@kazaarfragrances.com / <a href="https://www.kazaarfragrances.com"
                                style="text-decoration: none; color:#000;">www.kazaarfragrances.com</a></strong></p>
                </div>
            </td>
            <td style="width: 50%; padding-left: 20px; vertical-align: top;">
                <div class="section">
                    <table width="100%">
                        <tr>
                            <td width="40%" style="vertical-align: top; justify-content: center">
                                <img src="https://www.kazaarfragrances.com/cdn/shop/files/kazaar_schrift_in_schwarz.png?v=1679006536&width=100"
                                    alt="kazaar">
                                <div style="margin-top: 10px">Bestellung #405927<br><span>19 Apr 2025</span></div>
                            </td>
                            <td width="30%" style="vertical-align: top; justify-content: center">
                                <p><strong>VERSAND AN</strong></p>
                                <p>
                                    Treede Janine<br>
                                    Bahnhofstraße 3<br>
                                    24960 Glücksburg<br>
                                    Deutschland
                                </p>
                            </td>
                            <td width="30%" style="vertical-align: top; text-align: right">
                                <div style="text-align: left;">
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

                <div class="section" style="text-align: right">
                    <img src="https://placehold.co/377X566?text=HEPHAISTOS" alt="slip sticker2" style="width: 10cm; height: 15cm" />
                </div>
            </td>
        </tr>
    </table>

</body>

</html>

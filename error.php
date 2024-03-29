<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
</head>

<body>
    <div id="content">
        <div class="pointy pointer1"></div>
        <div class="pointy pointer2"></div>
        <div id="bg"></div>
        <?php

        $statusCode = [
            // 1xx informational
            '100' => '100',
            '101' => '101',
            '102' => '102',
            '103' => '103',

            // 2xx successful
            '200' => '200',
            '201' => '201',
            '202' => '202',
            '203' => '203',
            '204' => '204',
            '205' => '205',
            '206' => '206',
            '207' => '207',
            '208' => '208',
            '226' => '226',

            # 3xx redirection
            '300' => '300',
            '301' => '301',
            '302' => '302',
            '303' => '303',
            '304' => '304',
            '305' => '305',
            '306' => '306',
            '307' => '307',
            '308' => '308',

            # 4xx client error

            '400' => '400',
            '401' => '401',
            '402' => '402',
            '403' => '403',
            '404' => '404',
            '405' => '405',
            '406' => '406',
            '407' => '407',
            '408' => '408',
            '409' => '409',
            '410' => '410',
            '411' => '411',
            '412' => '412',
            '413' => '413',
            '414' => '414',
            '415' => '415',
            '416' => '416',
            '417' => '417',
            '418' => '418',
            '421' => '421',
            '422' => '422',
            '423' => '423',
            '424' => '424',
            '425' => '425',
            '426' => '426',
            '428' => '428',
            '429' => '429',
            '431' => '431',
            '451' => '451',

            # 5xx server error
            '500' => '500',
            '501' => '501',
            '502' => '502',
            '503' => '503',
            '504' => '504',
            '505' => '505',
            '506' => '506',
            '507' => '507',
            '508' => '508',
            '510' => '510',
            '511' => '511'
        ];

        $statusName = [
            // 1xx informational
            '100' => 'continue',
            '101' => 'switching protocols',
            '102' => 'Processing',
            '103' => 'Early Hints',

            // 2xx successful
            '200' => 'ok',
            '201' => 'created',
            '202' => 'accepted',
            '203' => 'non-authoritative information',
            '204' => 'no content',
            '205' => 'reset content',
            '206' => 'partial content',
            '207' => 'multi-status',
            '208' => 'already reported',
            '226' => 'im used',

            # 3xx redirection
            '300' => 'multiple choices',
            '301' => 'moved permanently',
            '302' => 'found',
            '303' => 'see other',
            '304' => 'not modified',
            '305' => 'use proxy',
            '306' => 'switch proxy',
            '307' => 'temporary redirect',
            '308' => 'permanent redirect',

            # 4xx client error

            '400' => 'bad request',
            '401' => 'unauthorized',
            '402' => 'payment required',
            '403' => 'forbidden',
            '404' => 'not found',
            '405' => 'method not allowed',
            '406' => 'not acceptable',
            '407' => 'proxy authentication required',
            '408' => 'request timeout',
            '409' => 'conflict',
            '410' => 'gone',
            '411' => 'length required',
            '412' => 'precondition failed',
            '413' => 'payload too large',
            '414' => 'uri too long',
            '415' => 'unsupported media type',
            '416' => 'range not satisfiable',
            '417' => 'expectation failed',
            '418' => "i'm a teapot",
            '421' => 'misdirected request',
            '422' => 'unprocessable entity',
            '423' => 'locked',
            '424' => 'failed dependency',
            '425' => 'too early',
            '426' => 'upgrade required',
            '428' => 'precondition required',
            '429' => 'too many requests',
            '431' => 'request header fields too large',
            '451' => 'unavailable for legal reasons',

            # 5xx server error
            '500' => 'internal server error',
            '501' => 'not implemented',
            '502' => 'bad gateway',
            '503' => 'service unavailable',
            '504' => 'gateway timeout',
            '505' => 'http version not supported',
            '506' => 'variant also negotiates',
            '507' => 'insufficient storage',
            '508' => 'loop detected',
            '510' => 'not extended',
            '511' => 'network authentication required'
        ];

        if (isset($_GET['s'])) {
            $stat = $_GET['s'];
            if (is_numeric($stat)) {
                if ($stat == $statusCode[$stat]) {
                    echo $stat, $statusName[$stat];
                } else {
                    header("Location: /");
                }
            } else {
                header("Location: /");
            }
        } else {
            header("Location: /");
        }
        ?>
    </div>
</body>

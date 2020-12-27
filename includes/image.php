<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Image)
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api#image-message
 */
/*
陣列輸出 Json
==============================
{
    "type": "image",
    "originalContentUrl": "https://api.reh.tw/line/bot/example/assets/images/example.jpg",
    "previewImageUrl": "https://api.reh.tw/line/bot/example/assets/images/example.jpg"
}
==============================
*/
global $client, $message, $event;
if (strtolower($message['text']) == "image" || $message['text'] == "圖片") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', //訊息類型 (圖片)
                'originalContentUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg', //回復圖片
                'previewImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg' //回復的預覽圖片
            )
        )
    ));
}
else if (strtolower($message['text']) == "start" || strtolower($message['text']) == "介紹") {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => array(
                        array(
                            "type" => "flex",
                            "altText" => "helo",
                            "contents" => array(
    "type" => "bubble",
    "hero" => array(
        "type" => "image",
        "size" => "full",
        "aspectRatio" => "20:13",
        "aspectMode" => "cover",
        "action" => array(
            "type" => "uri",
            "uri" => "http://linecorp.com/"
        ),
        "url" => "https://i-ogp.pximg.net/c/w1200_q80_a2_g1_u1_cr0:0.096:1:0.716/img-master/img/2020/10/06/00/05/57/84829856_p0_master1200.jpg"
    ),
    "body" => array(
        "type" => "box",
        "layout" => "vertical",
        "contents" => array(
            array(
                "type" => "text",
                "text" => "jujutsu",
                "weight" => "bold",
                "size" => "xl"
            ),
            array(
                "type" => "box",
                "layout" => "baseline",
                "margin" => "md",
                "contents" => array(
                    array(
                        "type" => "icon",
                        "size" => "sm",
                        "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                    ),
                    array(
                        "type" => "icon",
                        "size" => "sm",
                        "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                    ),
                    array(
                        "type" => "icon",
                        "size" => "sm",
                        "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                    ),
                    array(
                        "type" => "icon",
                        "size" => "sm",
                        "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                    ),
                    array(
                        "type" => "icon",
                        "size" => "sm",
                        "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                    ),
                    array(
                        "type" => "text",
                        "text" => "4.0",
                        "size" => "sm",
                        "color" => "#999999",
                        "margin" => "md",
                        "flex" => 0
                    )
                )
            ),
            array(
                "type" => "box",
                "layout" => "vertical",
                "margin" => "lg",
                "spacing" => "sm",
                "contents" => array(
                    array(
                        "type" => "box",
                        "layout" => "baseline",
                        "spacing" => "sm",
                        "contents" => array(
                            array(
                                "type" => "text",
                                "text" => "Place",
                                "color" => "#aaaaaa",
                                "size" => "sm",
                                "flex" => 1
                            ),
                            array(
                                "type" => "text",
                                "text" => "Miraina Tower, 4-1-6 Shinjuku, Tokyo",
                                "wrap" => true,
                                "color" => "#666666",
                                "size" => "sm",
                                "flex" => 5
                            )
                        )
                    ),
                    array(
                        "type" => "box",
                        "layout" => "baseline",
                        "spacing" => "sm",
                        "contents" => array(
                            array(
                                "type" => "text",
                                "text" => "Time",
                                "color" => "#aaaaaa",
                                "size" => "sm",
                                "flex" => 1
                            ),
                            array(
                                "type" => "text",
                                "text" => "10:00 - 23:00",
                                "wrap" => true,
                                "color" => "#666666",
                                "size" => "sm",
                                "flex" => 5
                            )
                        )
                    )
                )
            )
        )
    ),
    "footer" => array(
        "type" => "box",
        "layout" => "vertical",
        "spacing" => "sm",
        "contents" => array(
            array(
                "type" => "button",
                "style" => "link",
                "height" => "sm",
                "action" => array(
                    "type" => "uri",
                    "label" => "WEBSITE",
                    "uri" => "https://linecorp.com"
                )
            ),
            array(
                "type" => "spacer",
                "size" => "sm"
            )
        ),
        "flex" => 0
    )
)
                        )
                        
                    )
                ));
            }

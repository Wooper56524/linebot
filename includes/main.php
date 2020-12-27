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



if (strtolower($message['text']) == "intro") {   
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => "Hello，這裡是HololiveEN!一期生共有5位成員，分別是gawr gura, watson amelia, ninomae ina'nis, takanashi kiara,mori calliope! 輸入名稱以獲得更多資訊。   或輸入fsm查看FSM-.-" //回復訊息
            )
        )
    ));
}

if (strtolower($message['text']) == "fsm") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', //訊息類型 (圖片)
                'originalContentUrl' => 'https://i.imgur.com/kO40SDn.png', //回復圖片
                'previewImageUrl' => 'https://i.imgur.com/kO40SDn.png' //回復的預覽圖片
            )
        )
    ));
}
if (strtolower($message['text']) == "shark" || strtolower($message['text']) == "gura" || strtolower($message['text']) == "gawr gura" || strtolower($message['text']) == "鯊魚" || strtolower($message['text']) == "鯊鯊") {
    
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
        "url" => "https://user-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_1000,w_500,f_auto,q_auto/1369026/251247_457554.jpeg",
        "size" => "full",
        "aspectRatio" => "20:13",
        "aspectMode" => "cover",
        "action" => array(
            "type" => "uri",
            "uri" => "http://linecorp.com/"
        )
    ),
    "body" => array(
        "type" => "box",
        "layout" => "vertical",
        "contents" => array(
            array(
                "type" => "text",
                "text" => "Gawr Gura",
                "weight" => "bold",
                "size" => "xl"
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
                    "label" => "YOUTUBE",
                    "uri" => "https://www.youtube.com/channel/UCoSrY_IQQVpmIRZ9Xf-y93g"
                )
            ),
            array(
                "type" => "button",
                "style" => "link",
                "height" => "sm",
                "action" => array(
                    "type" => "uri",
                    "label" => "WEBSITE",
                    "uri" => "https://en.hololive.tv/portfolio/items/584533"
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

if (strtolower($message['text']) == "ame" || strtolower($message['text']) == "amelia" || strtolower($message['text']) == "watson amelia" || strtolower($message['text']) == "華生" || strtolower($message['text']) == "阿梅") {
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
        "url" => "https://user-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_1000,w_500,f_auto,q_auto/1369026/112336_876930.jpeg",
        "size" => "full",
        "aspectRatio" => "20:13",
        "aspectMode" => "cover",
        "action" => array(
            "type" => "uri",
            "uri" => "http://linecorp.com/"
        )
    ),
    "body" => array(
        "type" => "box",
        "layout" => "vertical",
        "contents" => array(
            array(
                "type" => "text",
                "text" => "Watson Amelia",
                "weight" => "bold",
                "size" => "xl"
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
                    "label" => "YOUTUBE",
                    "uri" => "https://www.youtube.com/channel/UCyl1z3jo3XHR1riLFKG5UAg"
                )
            ),
            array(
                "type" => "button",
                "style" => "link",
                "height" => "sm",
                "action" => array(
                    "type" => "uri",
                    "label" => "WEBSITE",
                    "uri" => "https://en.hololive.tv/portfolio/items/584534"
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

if (strtolower($message['text']) == "ina" || strtolower($message['text']) == "伊娜" || strtolower($message['text']) == "ninomae ina'nis" || strtolower($message['text']) == "觸手" || strtolower($message['text']) == "克蘇魯") {
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
        "url" => "https://user-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_1000,w_500,f_auto,q_auto/1369026/712914_145875.jpeg",
        "size" => "full",
        "aspectRatio" => "20:13",
        "aspectMode" => "cover",
        "action" => array(
            "type" => "uri",
            "uri" => "http://linecorp.com/"
        )
    ),
    "body" => array(
        "type" => "box",
        "layout" => "vertical",
        "contents" => array(
            array(
                "type" => "text",
                "text" => "Ninomae Ina'nis",
                "weight" => "bold",
                "size" => "xl"
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
                    "label" => "YOUTUBE",
                    "uri" => "https://www.youtube.com/channel/UCMwGHR0BTZuLsmjY_NT5Pwg"
                )
            ),
            array(
                "type" => "button",
                "style" => "link",
                "height" => "sm",
                "action" => array(
                    "type" => "uri",
                    "label" => "WEBSITE",
                    "uri" => "https://en.hololive.tv/portfolio/items/584532"
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

if (strtolower($message['text']) == "kiara" || strtolower($message['text']) == "火雞" || strtolower($message['text']) == "takanashi kiara" || strtolower($message['text']) == "琪亞拉" ) {
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
        "url" => "https://user-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_1000,w_500,f_auto,q_auto/1369026/207430_877763.jpeg",
        "size" => "full",
        "aspectRatio" => "20:13",
        "aspectMode" => "cover",
        "action" => array(
            "type" => "uri",
            "uri" => "http://linecorp.com/"
        )
    ),
    "body" => array(
        "type" => "box",
        "layout" => "vertical",
        "contents" => array(
            array(
                "type" => "text",
                "text" => "Takanashi Kiara",
                "weight" => "bold",
                "size" => "xl"
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
                    "label" => "YOUTUBE",
                    "uri" => "https://www.youtube.com/channel/UCHsx4Hqa-1ORjQTh9TYDhww"
                )
            ),
            array(
                "type" => "button",
                "style" => "link",
                "height" => "sm",
                "action" => array(
                    "type" => "uri",
                    "label" => "WEBSITE",
                    "uri" => "https://en.hololive.tv/portfolio/items/584528"
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

if (strtolower($message['text']) == "mori" || strtolower($message['text']) == "死神" || strtolower($message['text']) == "mori calliope" || strtolower($message['text']) == "calli" ) {
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
        "url" => "https://user-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_1000,w_500,f_auto,q_auto/1369026/603788_561144.jpeg",
        "size" => "full",
        "aspectRatio" => "20:13",
        "aspectMode" => "cover",
        "action" => array(
            "type" => "uri",
            "uri" => "http://linecorp.com/"
        )
    ),
    "body" => array(
        "type" => "box",
        "layout" => "vertical",
        "contents" => array(
            array(
                "type" => "text",
                "text" => "Mori Calliope",
                "weight" => "bold",
                "size" => "xl"
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
                    "label" => "YOUTUBE",
                    "uri" => "https://www.youtube.com/channel/UCL_qhgtOy0dy1Agp8vkySQg"
                )
            ),
            array(
                "type" => "button",
                "style" => "link",
                "height" => "sm",
                "action" => array(
                    "type" => "uri",
                    "label" => "WEBSITE",
                    "uri" => "https://en.hololive.tv/portfolio/items/584527"
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

##developer###
##@SSSSSSY###
##@SSSSSSY ###
##@SSSSSSY ###

if ($text =="تفعيل العاب اونلاين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔓¦ تم بالتاكيد تفعيل العاب اونلاين
📮¦ بواسطه ⋙「 [$from_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lon"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📮¦ عذرأ عزيزي عليك تفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل العاب اونلاين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔓¦ تم بالتاكيد تعطيل العاب اونلاين
📮¦ بواسطه ⋙「 [$from_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lon"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📮¦ عذرأ عزيزي عليك تفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
##developer###
##@SSSSSSY###
##@SSSSSSY ###
##@SSSSSSY ###
if ($text == "العاب اونلاين"){
if($settings["lock"]["lon"] == "مقفول"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"اختر احد الالعاب من الاسفل 👇👇",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"لشراء العاب لبوتك راسلني",'url'=>"http://t.me/SSSSSSY"]],
            [['text'=>"لعبة فلابي بيرد 🐥",'url'=>"https://t.me/awesomebot?game=FlappyBird"]],
            [['text'=>"تحداني فالرياضيات 🔢",'url'=>"https://t.me/gamebot?game=MathBattle"]],
            [['text'=>"تحداني في ❌⭕",'url'=>"http://t.me/Xo_motazbot?start3836619"]],
            [['text'=>"سباق الدراجات 🛵",'url'=>"https://t.me/gamee?game=MotoFX"]],
              [['text'=>"سباق السيارات 🏎",'url'=>"https://t.me/gamee?game=F1Racer"]],
            [['text'=>"متشابه 👾",'url'=>"https://t.me/gamee?game=DiamondRows"]],
            [['text'=>"كرة القدم ⚽",'url'=>"https://t.me/gamee?game=FootballStar"]],
            [['text'=>"دومنا 🥇",'url'=>"https://vipgames.com/play/?affiliateId=wpDom/#/games/domino/lobby"]],
            [['text'=>"❕ليدو",'url'=>"https://vipgames.com/play/?affiliateId=wpVG#/games/ludo/lobby"]],
            [['text'=>"ورق🤹‍♂",'url'=>"https://t.me/gamee?game=Hexonix"]],
            [['text'=>"لعبة 2048 🎰",'url'=>"https://t.me/awesomebot?game=g2048"]],
              [['text'=>"Hexonix❌",'url'=>"https://t.me/gamee?game=Hexonix"]],
            [['text'=>"MotoFx🏍️",'url'=>"https://t.me/gamee?game=MotoFx"]],
            [['text'=>"Squares🏁",'url'=>"https://t.me/gamee?game=Squares"]],
            [['text'=>"Atomic 1▶️",'url'=>"https://t.me/gamee?game=AtomicDrop1"]],
            [['text'=>"Corsairs",'url'=>"https://t.me/gamebot?game=Corsairs"]],
              [['text'=>"LumberJack",'url'=>"https://t.me/gamebot?game=LumberJack"]],
            [['text'=>"LittlePlane",'url'=>"https://t.me/gamee?game=LittlePlane"]],
            [['text'=>"RollerDisco",'url'=>"https://t.me/gamee?game=RollerDisco"]],
            ]
        ])
        ]);
}
}
##developer###
##@SSSSSSY###
##@SSSSSSY ###
##@SSSSSSY ###
if($text == "العاب اونلاين"){
if($settings["lock"]["lon"] == "مفتوح"){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"📮¦ عزيزي ⋙「 [$from_name](tg://user?id=$from_id) 」
🔓¦ العاب اونلاين معطله من قبل المدراء",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true
]);
}
}
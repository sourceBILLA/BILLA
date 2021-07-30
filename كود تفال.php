$Dev = "1396120066";

##كود ل ءبوايهاب لتخمط حبي##
##@PTPTPI##

if ($text =="تفعيل تفال" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⌔︙تم تفعيل امر تفال بنجاح
⌔︙بواسطة ↫ [$from_name](tg://user?id=$from_id)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["kiiio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⌔︙عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل تفال" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⌔︙تم تعطيل امر تفال بنجاح
⌔︙بواسطة ↫ [$from_name](tg://user?id=$from_id)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["kiiio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⌔︙عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
$carlos = array("خشوف وجهه يستاهل تفله","دي لك يخره شوف وجهك حرامت اذب تفلتي عليه😈👋🏿","دمشي لاتفل بخشمك🥱👏🏿","لك ياحيوان حترم لا اهينك اتفل بعينك😟🤘🏿","انته شايف وجهكك ب امرايه☹️🤘🏿");
$tiger = array_rand($carlos, 1);
if($reply and !in_array($re_id,$Dev)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"حاضر ستادي هسه شبعه تفال😻🤘🏿", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$carlos[$tiger]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }}

##كود ل ءبوايهاب لتخمط حبي##
##@PTPTPI##

if($reply and in_array($re_id,$Dev)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لك تريد اتفل عله تاج راسك وراسي🥱🤫",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }}

##كود ل ءبوايهاب لتخمط حبي##
##@PTPTPI##

if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌔︙عذرأ عزيزي ↫ [$from_name](tg://user?id=$from_id)
⌔︙ امر تفال معطل من قبل الادارة
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}

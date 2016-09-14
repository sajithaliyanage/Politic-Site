<?php
/**
 * Created by PhpStorm.
 * User: project
 * Date: 5/28/2016
 * Time: 6:31 PM
 */
header( 'Content-Type: text/html; charset=utf-8' );
session_start();
if(isset($_SESSION['language'])){
    $lan = $_SESSION['language'];
}else{
    $lan = "SI";
}
$textarray = array(
    //head and navigation bar
    "Royce Fernando"=> "රොයිස් ප්‍රනාන්දු",
    "Official Web Site" => "වෙබ් අඩවිය",
    "Home" => "මුල් පිටුව",
    "Biography" => "චරිතාපදානය",
    "News" => "පුවත්",
    "My Story" => "මගේ කතාව",
    "Gallery"=>"පින්තූර",
    "Private Gallery"=>"පෞද්ගලික",
    "Public Gallery"=>"මහජන",
    "Contact"=>"විමසීම්",
    //Footer
    "Royce Wijitha Fernando"=>"රොයිස් විජිත ප්‍රනාන්දු",
    "All Rights Reserved"=>"සියලුම හිමිකම් ඇවිරිණි",
    //INDEX PAGE
    "Other News" => "තවත් පුවත්",
    "Latest News" => "නවතම පුවත",
    "Read More"=>"වැඩි විස්තර",
    "Today's Cartoon"=>"දවසේ කාටූනය",
    "Youtube Channel"=>"වීඩියෝ",
    "Facebook Page"=>"ෆේස්බුක් සමාජය",
    "Twitter Page"=>"ට්විටර් පණිවිඩ",
    "Tweets by" => "ට්විටර් ගිණුම",
    "Google+ Account"=>"ගූගල්+ සමාජය",
    "My Brief"=>"මම",
    "My Mission"=>"මාගේ අරමුණ",
    "My Vision"=>"මාගේ දැක්ම",
    //NEWS PAGE
    //"Read More"=>"වැඩි විස්තර",
    "Previous Page"=>"පෙර පිටුව",
    "Next Page"=>"මීලග පිටුව",
    //NEWS ITEM PAGE
    "Back"=>"පෙර",
    "See more images about this Post"=>"මේ හා සම්බන්ද පින්තූර",
    "View"=>"බලන්න",
    //BIOGRAPHY PAGE
    "My Biography"=>"රොයිස් ප‍්‍රනාන්‍දුගේ දේශපාලන චරිතාපදානය",
    //MYSTORY PAGE
    //"My Story" => "මගේ කතාව",
    "Private Life"=>'මීගමුවේ රොයිස් විජිත ප‍්‍රනාන්‍දු පෞද්ගලික ජීවන තොරතුරු',
    "My Familiy"=>"පවුලේ විස්තර",
    "My Education"=>"අධ්‍යාපනික විස්තර",
    "My Career"=>"වෘත්තීය විස්තර",
    "My Target"=>"අරමුණු",
    "Base to the politics"=>'දේශපාලනයට පිවිසීම',
    //PRIVATE GALLERY PAGE
    "Private Gallery "=>"පෞද්ගලික ඡායාරූප",
    "Public Gallery "=>"මහජන ඡායාරූප",
    //CONTACT PAGE
    "How to Meet Me ?"=>"හමුවීම සදහා",
    ""=>"",
    "Meepura News"=>"මීපුර පුවත් (Meepura.com)"

);
$paragraphs = array(
    "footer_EN"=>"© 2016 Royce Wijitha Fernando. All Rights Reserved.",
    "footer_SI"=>"© 2016 රොයිස් විජිත ප්‍රනාන්දු. සියලුම හිමිකම් ඇවිරිණි.",
    //INDEX
    "para1_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam",
    "para1_SI"=>"මානව චරිත ස්වභාවය, පුද්ගල රුචි අරුචිකම්, සංඥාවන්ගේ විවිධතා හා ජානමය තත්ව <br> අනුව එක් එක් පුද්ගලයාගේ නිවැරදි මගට",
    "para2_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut",
    "para2_SI"=>"අන්තර් ආගමික සන්හිදියාව ගොඩ නැංවීම හා ජනවාර්ගික සුහදතාවය වර්ධනය කිරීම",
    "para3_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut",
    "para3_SI"=>"ගම් මට්ටමේ බිම් මට්ටමේ කසල සෝධකයාත්, කම්රුවාත්, රියදුරාත්, කාර්මිකයාත්, ධිවරයාත්, වෙළෙන්දාත්, ඔවුන් සිටින මට්ටමින් ඉහලට ඔසවා තැබීම",
    //BIOGRAPHY
    "para4_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.",
    "para4_SI"=>'
<span style="margin-left:15%;"></span><b>ජයවීර ආරච්චිගේ රොයිස් විජිත ප‍්‍රනාන්‍දු  </b>ප‍්‍රථම වතාවට දේශපාලනයට පිවිසියේ
මීගමුව තුළ චිරාත් කාලයක් පැවති අන්තර් ආගමික සංහිදියාව හා
මෙම නගරයේ ජීවත්වූවන් අතර පැවති ජනවාර්ගික සුහදතාවය
දෙදරා යමින් පැවති ආකාරය බලා සිටීමට අපහසු වූ නිසාය.
ඒ 2005 වසර අගභාගයේ දීය.

මීගමුව තූළ කිසිවකු නොසිතූ ආකාරයෙන්
පාතාල කල්ලි ක‍්‍රියාත්මක වෙන්නට පටන්  ගත්තේ මේ වකවානුවේදීය.
මහින්ද රාජපක්‍ෂ බලයට පැමිනීමත් සම`ග
චන්ඩිකම හා මැර බලය දේශපාලන අවිය බවට පරිවර්ථනය වෙමින් තිබුනි.
පොදු පෙරමුණ ආණ්ඩුවේ ප‍්‍රතිපත්ති මත මෙම වාතාවරනය ගොඩනැගෙමින් පැවතුනි.<br/><br/>
<span style="margin-left:15%;"></span>
රොයිස්, තමා ගැන බලාපොරොත්තු කිසිවක් නොමැතිවයි
එ.ජා.ප. දේශපාලනයට පිවිසෙන්නට අදිටන් කර ගත්තේ.

ජනමතය උරගා බලන්නට 2006 මාර්තු 30 දින පැවති පලාත් පාලන මැතිවරණයේ දී
මීගමුව මහ නගර සභාව ස`දහා තර`ග වැදුන රොයිස්,
එ.ජා.ප. කණ්ඩායමේ තර`ගකරුවන් අතර වැඩිම මණාප ලෙස ඡුන්ද 7376 ක් ලබා ගත්ත.
නමුත් නගර සභාවේ බලය එ.ජා.පක්ෂයෙන් ගිලිහී ගියා,

සංහිදියාව සහ සුහදතාවය මීගමුව තුළ යලි ස්ථාපිත කරන්නටත්,
මීගමු නගරයේ යටිතල පහසුකම් සංවර්ධනයටත්,
පුරවැසියන් අතර වූ දරිද්‍රතාවයෙන් පීඩිත අසරණ පවුල් නගාසිටුවීමටත්,
තරුණ පරපුරේ වෘතීමය කුසලතා ප‍්‍රවර්ධනයටත්,
ළමා පරපුර අධ්‍යාපනික වශයෙන් හා ක‍්‍රිඩා කෞශල්‍ය අතින්
උසස් මට්ටමකට ඔසවා තබන්නටත්,
රොයිස් එදා සකසා තිබුන සැලසුම් හදවතේ හිරකරගෙන
නිහ`ඩ වන්නට ඔහුට සිදු විය.<br/><br/>
<span style="margin-left:15%;"></span>
එහෙත් පාලක පක්‍ෂයේ වැරදි ක‍්‍රියාකාරකම් වලට එරෙහි වන බලවේගය බවට
රොයිස් පත් වුනේ නිරායාසයෙන්මය.
මීගමුව මහ නගර සභාවේ විපක්‍ෂ නායක ධූරයට
රොයිස් නම් කරන්නට එජාප පක්‍ෂය තීරණය කිරීම ඔහුට තවත් ශක්තියක් වුනි.

එදා පටන් බලයේ සිටි දේශපාලකයන් (2006 සිට* කරගෙන ගියා වු
වංචා, දුෂණ, හොර මැර, අසාධාරණ සිද්ධින්
ප‍්‍රසිද්ධියේ හෙලි කරමින් ප‍්‍රබල හ`ඩක් නගා
විපක්‍ෂයේ කාර්්‍යභාරය රොයිස් මැනවින් ඉටු කර ඇත.

මීගමුවේ හිටපු ශ්‍රේෂ්ඨ නගරාධිපතිවරයකු වූ
එක්සත් ජාතික පක්‍ෂික සරත්චන්‍ද්‍ර ගුණරත්න මැතිතුමා
1985 දි ඉදිකළ නව බස් නැවතුම්පල 2007 දී කඩාදමා,
බස් මගීන් අවුරුදු 3 කට වැඩි කාලයක් නන්නත්තාර කළාවු
මීගමුව නගරයේ එවකට සිටි පාලකයන්ට එරෙහිව
උද්ඝෝෂන කළ රොයිස් නිසා
වත්මන් බස් නැවතුම් පල ඉදිවූයේ
වංචා දුෂණයන්ගෙන් පිරී ඉදිකිරීමක් ලෙස බව
පුරවැසියන්ට හෙලි කළේය.<br/><br/>
<span style="margin-left:15%;"></span>
මීගමුවේ ‘‘රාජපක්‍ෂ උද්‍යානය’’ නමින් ප‍්‍රසිද්ධව පැවති මල්වත්ත,
1923 දී මීගමුව මහ නගර සභාවට පරිත්‍යාග කළ
රාජපක්‍ෂ මුදළිතුමාගේ තෑගි ඔප්පුව  නගර සභා සේප්පුවෙන් පිටමංකර,
එම ඉඩමට ප‍්‍රකාශණ ඔප්පුවක් සකසා
අ`ඵත් ඔප්පුවකින් බදු ගිවිසුමක් අත්සන් කර
ලංකාවේ ලියාපදිංචි නොවූ ‘‘තීම් පාර්ක් ’’ නමැති සමාගමකට පවරා
‘‘ඩයිනෝ පාර්ක් ’’ නමින් විවෘත කළ පාලකයෝ,
පාරම්පරික  රාජපක්‍ෂ උද්‍යාන නාමයත්
එකී පොදු පෙරමුණු පාලන සමයේදී
මකා දමන්නට කටයුතු කළ ආකාරය සම්බන්‍ධව
ප‍්‍රබල හ`ඩක් රොයිස් නැගූ නිසා,
වසර 5 ක් පමණ ශතයකවත් ආදායමක්
නගර සභාවට ලබා නොදුන්  ‘‘ඩයිනෝ පාර්ක් ’’ හොරුන්
පලවාහැර නැවත ‘‘රාජපක්‍ෂ උද්‍යානය’’ විවෘත වුවත්,
එම උද්‍යානය අද තත්‍වයට ගෙන ඒමේ දී ද
එම සංවර්ධන වැඩ සටහන මෙහෙය වූවන් වු බැසිල් ලාංසා එක්ව
ගසා කෑ ආකාරය හෙලි කළේ ද රොයිස් විසින්ය.

මීගමුව කලපුවේ කඩොලාන පරිසරය විනාශ කර කලපු තීරයේ
අක්කර (8* අටක් ඩෝසර් කර විනාශ කළ අවස්ථාවේ
ඒ විනාශය රටට පෙන්වා දුන්නේ ද රොයිස් විසින්ය.
එහෙත් අදවනතුරු යථා තත්‍වයට පත්කළ නොහැකිවු
මීගමු කලපුවේ මත්ෂ්‍ය  අභිජනන ස්වභාවික කේන්‍ද්‍රය
විනාශ කළ ආකාරයෙන්ම දැක ගතහැකිය.<br/><br/>
<span style="margin-left:15%;"></span>
මීගමුව ඒත්තුකාල වෙරළ උද්‍යානයේ
අනවසර ඉදිකිරීමක් වු නැවක ආකෘතියක් ලෙස තැනු හෝටලය හා
ඒ හෝටලය තුළ හා ආහ‍්‍රිත වෙරලේ ක‍්‍රියාත්මක වන
මත් ද්‍රව්‍ය හුවමාරු මධ්‍යස්ථානය ද
ඝණිකා ල`දුන් සැපයුම් ඒකකය ද සම්බන්‍ධව
මීගමු පවුල් ගස ගැන
මීගමුව මහ නගර සභාව තූල හ`ඩක් නැගුවේ ද රොයිස් විසින්ය.

එම හෝටලයේම මෙහෙයුම් කරුවන් වු මීගමු පවුල් ගස වෙනුවෙන්
ඊට යාබදව වෙරළේ,
ජාතික සංවර්ධන අමාත්‍යාශය විසින් ඉදිකර දුන්
අනවසර පිහිනුම් තටාකය
නීති විරෝධි ඉදිකිරීමක් බව හා
එම රාජ්‍ය දේපල පරිහරනය කරන්නන්
මීගමුව මහ නගර සභාවට හෝ රජයට ආදායම් බැර නොකරන බව පවසමින්
එයට එරෙහි වූවේ ද රොයිස් ය.

මීගමුව මහ වීදිය කතෝලික දේවස්ථානය
1868 දි නිර්මානය කළ ගරු විස්තීර්නි පියතුමා අනුස්මරනය කරමින්
මීට අවුරුදු 150 කට පෙර සථාපිත කළ විස්තීර්නි පාර,
මහවීදිය පල්ලිය ඉදිරිපිටින් ආරම්භ කර
පි‍්‍රන්ස් ඔෆ් වේල්ස් මාවත (වෙරළ තීරුව* දක්වා පැවති
අඩි 40 ක් පමණ පළල පාර ජාතික සංවර්ධන අමාත්‍යාශය හරහා මකා දමා,
ඒ පාර මත සතිපතා පොළ පැවැත්වීමට අදාළ ගොඩනැගිලි,
අනවසර හා බලහත්කාර ඉදිකිරීම් බව ප‍්‍රකාශ කර
විරෝධය දැක්වූයේ ද රොයිස් විසින්ය. කලින් කී හිටපු නගරාධිපති වරයකුවූ
එක්සත් ජාතික පක්‍ෂයේ සරත්චන්‍ද්‍ර ගුණරත්න මැතිතුමා
1985 දි ඉදිකළ කඩොල්කැලේ මහා ක‍්‍රිඩාංගනය
කෑලි කෑලි වලට කැඩු පොදු පෙරමුණ පාලකයෝ
නගර සභාවේ පාලනයට නතුව තිබූ මේ ක‍්‍රිඩා භූමිය,
මීගමුවේ පාපන්දු ක‍්‍රිඩා සමාජයකට බදු දී
පොදු ජන ක‍්‍රිඩා කටයුතු වලට අවහිර කළා පමණක් නොව
මීගමුව මහ නගර සභාවට සතයක් වත් නොදී,
එකී පලාත් පාලන ආයතනයේ අවසරයකින් තොරව
මීගමු පවුල් ගස එම භූමිය කුලියට දී මුදල් ගසා කන ලදී.<br/><br/>
<span style="margin-left:15%;"></span>
එම ක‍්‍රිඩාංගනයේ තවත් කොටසක්
මෙලෝ හසරක් මීගමුවට නොකළ දේශපාලකයකු වෙනුවෙන්
‘‘ජෙයරාඡ් ප‍්‍රනාන්‍දුපුල්ලේ’’ ක‍්‍රිඩාංගනය නමින් නම් කර
ටෙනිස් ක‍්‍රිඩාංගනයක් හා ගෘහස්ථ ක‍්‍රිඩාගාරයක්
පවත්වාගෙන යන්නට ඉඩ දී
දැවැන්ත ආදායම් මාර්ගයක් හා බුක්තිය ද
මීගමුව මහ නගර සභාවට අහිමි කිරීම සම්බන්‍ධව
විරෝධතා දැක් වූයේ රොයිස් විසින්ය.

නාගරික මැතිවරණ සීමානීර්න කටයුතු
පොදු පෙරමුණ මන්ත‍්‍රින්ගේ උවමනාවට
ඒක පාක්‍ෂිකව සිදු කළ ආකාරය පිළිබ`දව
විරෝධය පා ඊට අදාළව ක‍්‍රියාතමක වූයේද රොයිස් ය,

හිටපු නගරාධිපතිවරයකු වූ
එක්සත් ජාතික පක්‍ෂයේ සරත්චන්‍ද්‍ර ගුණරත්න මැතිතුමා
1985 දි නගර සභාව වෙනුවෙන්
මංඤාක්ක හේන පොදු සුසාන භූමියේ මතු අවශ්‍යතා වෙනුවෙන්
බදු ගෙවන්නන්ගේ මුදලින් එදා මිලදී ගෙන තිබු
අක්කර 5 ක් පමණ වූ ඉඩම යොදාගෙන,
සුනාමි නිවාස තනන්නට බලහත්කාරයෙන් කටයුතු කළ අයට
මීගමුව මහ නගර සභාව ඉඩ දුන් අවස්ථාවේ
ඊට විරුද්ධව රොයිස් ක‍්‍රියා කළේ
මීගමුව නගරයේ බදු ගෙවන්නන්ගේ
අයිතිය ආරක්‍ෂා කර දීමටය.<br/><br/>
<span style="margin-left:15%;"></span>
මීගමුව කුට්ටිදුව වෙරළේ
අනවසර හා නීතිවිරෝධි ගොඩනැගිල්ලක් ලෙස
ජපන් ආධාර යටතේ ඉදිකළ
මාලූ වෙළ`ද සැල මගින් කිසිම ආදායමක් රජයට හෝ
නගර සභාවට නොලැබෙන බවත්
ඊට  විරුද්ධ වු රොයිස්
එකි වෙළ`දපල ආශ‍්‍රිත සෙල්බි පාරේ හා කොටුව පිට්ටනිය වටා ඇති පාරවල් වල
මාලූ මිලදී ගන්නට පැමිනෙන පාරිබෝගිකයන්
ගාල් කරන තම වාහන වලින් ගාස්තු අය කිරීමට
නගර සභාව හැරුන විට වෙනත් අයට බලයක් නොමැති බව කියා
සාන්තුවර සෙබස්තියන් මුනි තුමා විකුණාගෙන කණ
මීගමු පවුල් ගස ට විරුද්ධව කටයුතු කළේ ද රොයිස් ය.
තිල්ලන්දුව රේල් ගේට්ටුව හන්දියේ
සාන්ත ජෝශප් වීදිය හා
අගරදගුරු නික්ලස් මාකස් මාවත සම`ග ඇති ග‍්‍රීන්ස් පාර එක්වන ස්ථානයේ
ඉදිකර ඇති හෝටල් සහ කඩසාප්පු
නීති විරෝධිව, වීථි රේඛා විකෘතිකර
නාගරික ඉංජිනේරු අංශය
පාලක පක්‍ෂය විසින් දුෂිතව මෙහෙයවා
එම ගොඩනැගිලි ඉදිකර ගන්නට
එදා මහ නගර සභාව ඉඩ දුන් නිසා
අද එම හය (6* මංසන්දිය
දැඩි රථ වාහන තදබදයකට මුහුණ දී ඇත.
එදා මුදලාලිලා සම`ග ඇති වූ
දුෂිත ගනුදෙනු ගැන හෙලි කළේ ද රොයිස් ය.

ග‍්‍රින්ස් පාර්ක් පිට්ටනිය
නගර සභාව විසින් විකුණා දමන්නට කටයුතු කරද්දී
නඩු පවරා බේරා ගත්තේ රොයිස් විසින්ය.
අද එම සථානය පෙට්ටි කඩ පෙලකට අවසර දී
අශෝබන පෙනුමක් නගරයට එක් කළේ මීගමු පවුල් ගස බව
කියා සිටින්නේද රොයිස්ය.

නාගරික සාප්පු සංකීර්ණයේ කොරිඩෝ හා
පඩි පේලි අවහිර කර
කඩ සාප්පු තනන්නට
තම ඇම්බැට්ටයන්ට නගර සභා පාලකයෝ
අවසර දීම ගැන විරුද්ධ වූයේ රොයිස් ය.<br/><br/>
<span style="margin-left:15%;"></span>
නාගරික සාප්පු සංකීර්ණයට යාබද
දුම්රිය දෙපාර්තමේන්තුව සතු ඉඩම
ව්‍යාපාරිකයන් 50 කට වැඩි පිරිසක් රවටා
බදු දී රාජ්‍ය දේපල අපහරනය කිරීම පිළිබ`දව විරුද්ධ වුයේ ද රෙයිස් ය.

හැමිල්ටන් ඇල තුළ
සංචාරක බෝට්ටු සේවා පවත්වන්නට
එක් පුද්ගලයකට බදු දෙනවාට විරුද්ධ වු රොයිස්
එම ඇල මාර්ගය
පොදු ප‍්‍රවාහනයට ඉඩ සලසන ලෙස ඉල්ලා සිටින ලදී

රජය සතු කලපු දුපතක් තුළ සංචාරක හෝටලයක් තනා පවත්වාගෙනයාමට ද
එම ස්ථානයට විදුලිය හා ජලය සපයා දෙන්නට ද
අවශ්‍ය පහසුකම් සැලසූ පොදු පෙරමුණේ පාලකයන්
රාජ්‍ය දේපල අවභාවිත කරන්නට ව්‍යාපාරිකයන්ට ඉඩකඩ සලසා දී
දුෂිත ගණුදෙනු වල නිරතවීම පිළිබ`දව
දේශපාලකයකු ලෙස විරුද්ධ වුයේ ද රොයිස්ය.

මේ ආකාරයෙන් ක‍්‍රියාත්මක වීම නිසා මීගමු පවුල් ගස හා විරුද්ධ දේශපාලකයන් රොයිස්ව විනාශ කරන්නට මාන බැලූ අතර, ඒවා ක‍්‍රියාවට නැගූ අවස්ථාද තිබුනි.

මේ ආකාරයෙන් මීගමුවේ විපක්‍ෂ නායක ලෙස වගකීම් ඉටුකළ ආකාරයත්,
රාජපක්‍ෂ ආණ්ඩුවේ තාඩන පීඩන ඉවසා දරාගෙන,
එ.ජා.ප. අසරණව සිටිය දී පක්‍ෂය ආරක්‍ෂා කරගෙන,
තම දක්‍ෂතා හා නිර්භිත හැසිරීම
මීගමු ජනතාව හිස් මුදුනින් පිලිගත් බව සනාථ වුයේ

2011 පැවති  පලාත් පාලන මැතිවරණයේ දීය.

මීගමුව මහ නගර සභාව ස`දහා එ.ජා.ප. තර`ගවැදී
එම අවස්ථාවේ දී ද කණ්ඩායමේ වැඩිම මනාප ලාභියා ලෙස
ඡුන්ද 21642 ක් ලබා මීගමුව මහ නගර සභාවේ මන්ත‍්‍රිවරයකු වූ නමුත්
එම අවස්ථාවේදී ද පාලන බලය පොදු පෙරමුණට හිමි වූ බැවින්
නැවත මීගමුව මහා නගර සභාවේ විපක්‍ෂ නායක ධූරයට රොයිස් පත් වූයේය.

එදා රාජ්‍ය බලය උපරිමයෙන් යොදා
නීතිය අභිබවා
මැතිවරණ සටකපටකම් මැද
මීගමු මැතිවරණ ඉතිහාසයේ මනාප වර්තා බි`දහෙලන්නට
කතිරයෙන් ශක්තිය දුන්න මීගමු ජනතාවට
රොයිස් බොහෝම ගරු කරනවා.

පැරදුනාට ! වැරදුනේ නෑ ! කිවුවෙ රොයිස්<br/><br/>
<span style="margin-left:15%;"></span>
<b>‘‘දිවිහිමියෙන් එ.ජා.ප. සුරකින්න එක්වූ රොයිස් ,
බුද්ධිමතුන්ගෙ හයියයි, බිම්මට්මෙයි ගම්මට්ටමෙයි ශක්තියයි,
එක්තැන් කරන බලවේගය වෙන්නම් මතු දා’’ </b>කියා
ලිව්ව රොයිස්,
තම කටයුතු විවිධ බාධක කම්කටොලූ මැද කරගෙන ගොස්
ආත්ම විශ්වාසය දෙදරවාගෙන සිටි
එක්සත් ජාතික පාක්‍ෂිකයන් ද ආරක්‍ෂා කරගෙන,
පක්‍ෂ නායකත්‍වයේ විශ්වාසය දිනු නිසා,
2013 නොවැම්බර් 13 දා සිට
මීගමුව අසනයේ එ.ජා.ප. ප‍්‍රධාන සංවිධායක ධුරයෙන් පිදුම් ලබන්නට
රොයිස්ට වරම් ලැබුනි.

2014 බස්නාහිර පලාතේ පලාත් සභාවට
නියෝජිතයන් තෝරන මැතිවරණය පවත්වන්නට නාම යෝජනා කැ`දවා තිබුනි.
ගම්පහ දිස්ත‍්‍රික්කයේ එජාප වෙනුවෙන් තර`ග කරන්නට රොයිස් ද ඉදිරිපත් වුනා.
ආණඩු බලය හිමි රොයිස්ගේ විරුද්ධවාදීන්
මොහුගේ ඡුන්ද සටන දියාරු කරන්නට
සැලසුම් සහගතව උපක‍්‍රමශීලීව බලය අයුතු ලෙස මෙහෙයවා
රොයිස් හිරබාරයේ තබන්නට දියත් කළ මෙහෙයුම අනුව
බන්‍ධනාගාර ගත වූ රොයිස්
පලිගැනීමට ලක් වූ දේශපාලන සිරකරුවකු බවට පත්ව
හිර ගෙදර සිට ඡුන්ද සටන මෙහෙයවා
ජනතා විශ්වාසය තහවුරු වූ නිසා

2014 මාර්තු 29 වනදා පැවති
බස්නාහිර පලාත් සභා මැතිවරණයේදී
රොයිස්ගේ නමට මණාප ඡුන්ද 29291 ලබා ගන්නට සමත් වුනි.
පලි ගැනීම කොතරම් නින්දිත වූවාද යත්
එම පලාත් සභාවේ සමාරම්භක උත්සවයට සහභාගිවන්නට හා
මන්ත‍්‍රිවරයකු ලෙස දිවුරුම් දීමට පවා අවස්ථාව සලසා නොදුන් බලධාරීන්
ඊට පසුව මන්ත‍්‍රිවරයකු ලෙස පලාත් සභා රැුස්වීම්වලට රැුගෙන යනවාට
බන්‍ධනාගාර රථය ස`දහා මුදල් අයකළ එකම මන්ත‍්‍රිවරයා ලෙස ඉතිහාසයට එක්වුනි.<br/><br/>
<span style="margin-left:15%;"></span>
මීගමුව මහ නගර සභාවේ මන්ත‍්‍රිකමත් විපක්‍ෂ නායක ධුරයත් අත්හරින්න සිදුවුවත්
බස්නාහිර පලාත් සභා සේවයට එකතු වු රෝයිස් ගේ

මීගමු ආසන සංවිධායකත්‍වය තුළ
2015 ජනවාරි 08 වනදා පැවති ජනාධිපතිවරණයේදී
මීගමුව ආසනය මෛත‍්‍රිපාල සිරිසේන මැතිතුමාට දිනවා දුන්නේ
මහින්දට මීගමුවෙන් ලැබුනාට වඩා වැඩි ඡුන්ද 29000 කින් ජයග‍්‍රහනය හිමිකර දෙමිනි.

2015 අගෝස්තු 17 වනදා පැවති
පාර්ලිමේන්තු මහා මැතිවරණයට ඉදිරිපත් වූ රොයිස්
ගම්පහ දිස්ත‍්‍රික්යේ ඡුන්ද 57013 ලබා සිටි නමුත් පාර්ලිමේන්තු ගමන අවහිර වුනි.
එම මැතිවරණයේදී මීගමුව ආසනයෙන් මනාප ඡුන්ද 31399 ලබාගෙන තිබුනි.

එම මැතිවරණයේදී මීගමුවේ සමස්ථ ඡුන්ද දායකත්‍වයෙන් 66% ක්
එනම් ඡුන්ද 53331 එක්සත් ජාතික පක්‍ෂයට ලැබුනි.
එහෙත් පොදු පෙරමුණට හිමිවුනේ ඡුන්ද 25432 ක් හෙවත් 32% කි,
මේකී ප‍්‍රථිපලයට හේතුව රොයිස්ගේ සංවිධායකත්‍වය බව නොරහසකි.

රොයිස්ට කිසියම් පුද්ගලයකු කෙරෙහි හෝ
දේශපාලන කණ්ඩායමක් කෙරෙහි හෝ වෛරයක් කොහෙත්ම නැත.

රාජ්‍ය බලය උපයෝගී කරගෙන මීගමුව මහ නගරයේ බදු ගෙවන්නන්ගේ හෝ
ජාතික වශයෙන් පොදු මහජනතාවගේ දේපළ අවභාවිතය කරන්නන් ද

අල්ලස් ගනිමින්, විවිධ දුෂණන් කරමින් ද, මත්ද්‍රව්‍ය, ළමා අපචාර හෝ ඝණිකා වෘත්තීය ප‍්‍රවර්ධනයට රැුකුල් දෙමින් යමෙකුට ලැබුන ජනවරම අනිසි ලෙස හසුරුවන  ඕනෑම පුද්ගලයකුට හෝ කණ්ඩායමකට එරෙහිව නැගී සිට විරෝධය දැක්වීම ද

රොයිස්ගේ දේශපාලනික ක‍්‍රියාදාමයයි. ඒවාට පුද්ගලික වෛරයක් පදනම් කර නොගත් රොයිස් තම සේවා සහය පතන  ඕනෑම අයකුට උපකාර කරන බව නොපැකිල ප‍්‍රකාශ කරයි.<br/><br/>
<span style="margin-left:15%;"></span>
අවංකව මීගමුවට ඇලූම් කරන විද්වතුන්ගේ පහස සොයන රොයිස්
මීගමුවේ සංවර්ධනයට සහ පැවැත්මට පූජක පැවිදි උත්තමයන්ගේ ද විද්‍යාඥයන්ගේ ද පරිසරවේදීන්ගේ ද තාක්‍ෂණවේදීන්ගේ ද වෛද්‍යවේදීන්ගේ ද නීතිවේදීන්ගේ ද  දේශපාලනඥයන්ගේද ගණකාධිකාරීවරුන්ගේද ගරුවරුන්ගේද පරිපාලන නිලධාරීන්ගේද ව්‍යාපාරික ප‍්‍රජාවගේ ද උපදෙස් හා අනුසාශනා සම`ග හිතාදර සහයෝගය අපේක්‍ෂා කරයි.

ගම් මට්ටමේ බිම් මට්ටමේ කසල සෝධකයාත්, කම්රුවාත්, රියදුරාත්, කාර්මිකයාත්, ධිවරයාත්, වෙළෙන්දාත්, ඔවුන් සිටින මට්ටමින් ඉහලට ඔසවා තැබීම රොයිස්ගේ පැතුමයි.

රොයිස්ට තිබෙන දර්ශනය පදනම්ව තිබෙන්නේ ඉවසීම තුළය.
ඞී.එස්. සේනානානක මැතිතුමා අවුරුදු 25 ක් කට්ටකාලයි අගමැති වුනේ.
කොතලාවලත් පේ‍්‍රමදාසත් ඒවගේමයි. ෙඡ්.ආර් වයස 72 දි රාජ්‍ය නායකය වුනේ.

ජීවිතය පරදුවට තැබු ජනපති මෛත‍්‍රිගේ ඉලක්ක ගත සැලසුම් වගේම
බලයට කෑදර නොවී ඉලක්ක සපුරා ගත් රනිල්ගේ ඉවසිලිවන්ත දැක්ම තුළ ගැවසෙන රොයිස්
මීගමුවෙ සාමාන්‍ය පවුලක දුක් පීඩා කරපින්නාගෙන උපන්නකු බව නොරහසකි.
',
    //MYSTORY
    "para5_EN"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ",
    "para5_SI"=>'මීගමුවේ පාරම්පරිකව කතෝලික පවුලක පුතෙකු ලෙස
1965/03/04 වන දා උපත ලද
<b>ජයවීර ආරච්චිගේ රොයිස් විජිත ප‍්‍රනාන්‍දු </b>ගේ<br/>
පියා	ජයවීර ආරච්චිගේ ඇලෝසියස් ප‍්‍රනාන්‍දු විය.
මව මේරි ටී‍්‍රසා ක‍්‍රිස්පීන් ප‍්‍රනාන්‍දු වුවාය.<br/>
රොයිස්ට	වැඩිමහල්	සහෝදරයන් 02 කි  සහෝදරියන් 01 කි.
',
    "para6_EN"=>"",
    "para6_SI"=>'මීගමුවේ තිල්ලන්දුව සාන්ත ජෝශප් විදුහලෙන් 	හා
බොරැුල්ල සා. ඇලෝසියස් දෙව්සත්හලෙන් මූලික අධ්‍යාපනය ලබා
මීගමුවේ මාරිස්ටෙල්ලා විදුහලෙන් හා
මීගමුව සා. මරියා මහ විදුහලෙන් උසස් අධ්‍යාපනය හමාර කර ඇත.
එම විදුහලේ බාස්කට් බෝල් කණ්ඩායමට නායකත්‍වය දී
සමස්ථ ලංකා ජයග‍්‍රහන හිමි කර දී ඇත.
සිංහල , දෙමළ හා ඉංග‍්‍රිසි යන භාෂා
චතුර ලෙස හැසිරවීමේ හැකියාව ද රොයිස්ට ඇත.

තිල්ලන්දුව කතෝලික දේවස්ථානයේ ළමා ක‍්‍රියාකරකම් වල නිරතව සිටීම නිසා
බොරැුල්ල සා. ඇලෝසියස් දෙව්සත්හලේ පුජක පුහුණුව සදහා ඇතුලත් වන්නට අවස්ථාව රොයිස්ට ලබුනි.
එහෙත් පුජකවරයකු වීමට රොයිස්ට දේව කැදවීමක් නොතිබුනි.
',
    "para7_EN"=>'',
    "para7_SI"=>'උසස් පෙල අධ්‍යාපන කටයුතු හමාර කර
ශ‍්‍රි පොලීසිය ට බැදී
රට රකින්නට STF විශේෂ පොලිස් කාර්්‍ය බලකායේ
නිලධාරියකු වන්නට වරම් ලැබුනි. ඊශ‍්‍රායලයට යැවු ප‍්‍රථම පුහුණු කණ්ඩායමට රොයිස්ද සම්බන්‍ධවී තිබුනි.
විශේෂ පොලිස් කාර්්‍ය බලකායේ සාර්ථකව සේවා කාලය නිමවා
විදේශ රැුකියාවක නියුතුව සිටි රොයිස්
පෙරලා සිය රට පැමිණ තම ව්‍යාපාරික කටයුතු වල නිරතවුනි.

දේශපාලනය ක්‍ෂේත‍්‍රයට පිවිසෙන්නට රොයිස් තුළ කිසිම අදහසක් තිබී නොමැත.
',
    "para8_EN"=>'',
    "para8_SI"=>'1991 ජූලි 20 දින බම්මන්නගේ රේඛා කුමාරී කුරුකුලසූරිය මෙනවිය සමග
විවාහ වූ රොයිස්
ආදරනීය පුතුන් දෙදෙනකුගේ පියෙකි.
වැඩිමහල් පුතා	ජයවීර ආරච්චිගේ කිවාන් නයිගර් තිවන්ක ප‍්‍රනාන්‍දු
විවාහ ගිවිසගෙනය. කැනඩාවේ රැුකියාවක නිරතය.
බාල පුතා ජයවීර ආරච්චිගෙ දිදුලන්ක දනෝචන ප‍්‍රනාන්‍දු
තවමත් පාසල් ශිෂ්‍යයෙකි.
',
    "para9_EN"=>'',
    "para9_SI"=>'මීගමුව නගර සභා භූමියේ ක‍්‍රිස්තුස් වහන්සේගේ ප‍්‍රතිමාවක් ස්ථාපිත කරන්නට යාමේ දී
අන්තවාදී පිරිස් ඊට ඉඩ නොදී කතෝලිකයන්ට හිරහැර කිරීමය.
අපගේ කතෝලික පුජකවරුන්ගේ ඇග බැද සිර ගෙවල් වලට යවන්නට
අන්තවාදීන් ක‍්‍රියා කළ ආකාරය දරා සිටීම
රොයිස්ට ඉවසා සිටීම අපහසු වූ නිසා,
එම ක‍්‍රිස්තු ප‍්‍රතිමාව නගර සභා භුමියට ගෙන එන්නට හා
එහි දී එය සථාපිත කරන්නට ද රොයිස් නිර්භයව ඉදිරිපත් වු බව ප‍්‍රසිද්ධය.
එම ප‍්‍රතිමාව සම්බන්‍ධව අන්තවාදීන් නඩු පැවරූ අවස්ථාවේ දී,
නීතිමය කාර්්‍යයන් සම්පූර්ණ කිරිමට ද ,
තීන්දුව අනුව එම ප‍්‍රතිමාව අද පවතින අයුරින් සථාපිත  කිරීමට ද
රොයිස් සම්පූර්ණ සහයෝලය ලබා දුන්නේ අනෙකුත් අනුග‍්‍රහකයන් දිරිමත් කරමිනි.
නිහඩව සිදු කළ එම කටයුතු ගැන දැන සිටියේ
එම ක‍්‍රිස්තු ප‍්‍රතිමාව ඉදිකිරීමේ කාර්්‍ය බාරව සිටි ගිහි පැවිදි මෙහෙයුම් කණ්ඩායම පමණි.

මෙකී පසුබිම තුළ රොයිස්
2006 මාර්තු 30 වනදා පැවැත්වු පලාත් පාලන මැතිවරණයේදී
එක්සත් ජාතික පක්‍ෂයේ මීගමුව මහ නගර සභාවේ නියෝජිත තර`ගය ජයගෙන
එජාප අපේක්‍ෂකයන් අතරින් වැඩිම මනාපය වු 7376 ක් ඡුන්ද ලබාගෙන
මීගමුව මහ නගර සභාවේ විපක්‍ෂ නායකවරයා බවට පත්වුනි.
ඊට 5 වසරකට පසු 2011 පලාත් පාලන මැතිවරණයේදී
21642 ක් මනාප ලබාගත් ඔහු , තුන් ගුනයක මනාප ප‍්‍රවර්ධනයක් පෙන්නුම් කර ඇත.
ඒ අවස්ථාවේ දී ද මීගමුව මහ නගර සභාවේ විපක්‍ෂ නායකවරයා බවට නැවත පත්වුනි.

2013 නොවැම්බර් 13 දා සිට
මීගමුව අසනයේ එ.ජා.ප. ප‍්‍රධාන සංවිධායක ධුරයෙන් පිදුම් ලබන්නට රොයිස්ට වරම් ලැබුනි.

2014 පලාත් සභා මැතිවරණයට ගම්පහ දිස්ත‍්‍රික්කයෙන් එක්සත් ජාතික පක්‍ෂයෙන් තරග වැදී
මනාප 29291 ලබාගෙන බස්නාහිර පලාත් සභාවේ මන්ත‍්‍රිවරයකු බවට පත්වුනි.

2015 මහ මැතිවරණයේදී මීගමුව ආසනයෙන් රොයිස්ට ඡුන්ද 31399 ක් ලැබුනි ,
ගම්පහ දිස්ත‍්‍රික්කයෙන්ම ලැබුනේ ඡුන්ද 57013 කි

'
);
function translate($sentence,$lan){
    global $textarray;
    if($lan=="SI"){
        return $textarray[$sentence];
    }
    return $sentence;
}
function getPara($para,$lan){
    global $paragraphs;
    if($lan=="SI"){
        return $paragraphs[$para."_SI"];
    }
    return $paragraphs[$para."_EN"];
}
function getImageTranslation($name,$lan){
    if($lan=="SI"){
        return $name.'_SI';
    }
    return $name;
}
<?php $dizi = array("mikrofonsuzrapci","lahmacunkafali","nefinnefin","gamzeliwampir","laaps","lanetadam","esmerkadin","amour","crush","affection","killerman","kirginyuz","beng-boy","atlifilozof","katreivefa","gunduzgece","ocean","felicity","daystar","isimsizrehber","yolunyolcusu","assenger","illegalsair","sahsinamunasir","optikyazar","kedisesi","pisipisi","dissimilarity","imprecation","okyanustakibulut","fearless-man","afilliyanlizlik","gonulyarasi","birbardakcay","birfincankahve","birbardakcola","iglovequotes","mecazherif","mikroplazma","gokyuzubeyi","supraysmadafaka","pansehir","gecenintenhasi","murekkepatesi","cehennemindibindeki","lordeismydope","huysuzman","nursuzpic","kuralsiz","adamintillahi","yazanadam","odunadam","NowhereMan","facefullofnour","zirvedecamasirasangenc","****ninteki","safornitorenk","coolcocug","ayprens","sahildekisigara","misslavinia","nightingale","moonlight","benzinkokusu","atarliromantik","dengesizbayan","agacsizkoala","ejderhakiz","yorgunsair","sadistbiradam","saskinmaymun","bagzibiseyler","sonpamuktikici","gecesiyah","eskintihar","thedeadhopess","selcandy","sirinhatun","tamvururgirl","tursucutembelvampir","evcilkaktus","manyakwebmaster","webkackini","evilpluto","learnedkiller","beklenmeyenmisafir","sanalkoala","larviya","shutthefuuck","kemikkadin","mavispreyboya","atkafalipsIkopat","birsiyahhikayesi","ruhumokuz","bittercikolata","loveofgods","justpunch","meyveverenagac","sansurperdesi","ciceksaclikiz","siyahmezar","chocolatebitter","sekerlibira","reticentlady","somurtkankedi","kacakuzayli","mavimilena","denizsiyahi","halaycibasi","plutonzombisi","tombulyanak","aptalizm","galaksidebirbalik","limonlucikolataa","meteerpeginyaridasonensigarasi","marsmelegi","hastabukalemun","mimikralicesi","deliedenpsIkolog","hayatmavisi","ortadakiadam","umudumondakaldi","kitaptiryakisi","noktaadam","deprestyonistadam","sozlordu","sarhosmuolsak","beyoglupici","ilksigaramsin","kokunhuzur","turkuazkrampon","psIkolajikdeli","elmacikkemikleri","sendolugeceler","beynimtok","pandalazim","huzundengolgeler","kareligomlek","oxygen","murderer","thug","psyche","ghost","shade","psychopath","kafatasi","skull","rabidness","insanity","enormity","monster","creature","phantom","spectre","cutthroat","slaughterer","thumper","alone-angel","alonedarked","leqendarrow","gamekinger","darkdayss","deathofangel","fearless","braveheart","Swindler","Falcon","Unknown-Love","fairy-tale","mytharrow","eldrithc-arrow","Okeanos","Nemesis","TheArk");

$toplam = count($dizi);

$rand = rand(0,$toplam);
$rand2 = rand(0,5);
$username = $dizi[$rand];
$rand3 = rand(10,99);
if ($rand2 == 0 OR $rand2 == 1 OR $rand2 == 2 ) {
$username = str_replace('e', '4', $username);
}elseif($rand2 == 3 OR $rand2 == 4 OR $rand2 == 5 ) {
    $username = $username.$rand3;
}

echo $username;
?>
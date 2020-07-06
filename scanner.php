#!/usr/bin/php -q
<?php
/*
|------------------------------------------------------------------------------------------------|
                                  | Bem vindo ao meu projeto |
Esse script tem a função de buscar arquivos e diretorios pelo site desejado, ele  é um projeto
elaborado a um tempo bem grande porém não tive tempo pra poder mexer nele. irei deixar essa versão
disponivel porém futuramente essa versão será atualizada com diversas funções e pretendo trazer 
uma grande ferramenta de Footprint.
[*]Desenvolvedor: Jonathan Baskov(jord@rootExploit)
[team]- Insanity Security Lab - MindsetSecurity 
[Greetz] LILITH.NET - SR.STORM
|-------------------------------------------------------------------------------------------------|
*/
error_reporting(0);
exec(reset);
$pag = file('.back.txt');
//.back.txt é aonde vai estar todos os Diretórios e arquivos. vc mesmo pode acrescentar caso queira...
//ele usa  a wordlist do dirb até que eu consiga gerar uma wordlist com  todos os diretorios manualmente 
//
echo "\033[31m
███████╗ ██████╗ █████╗ ███╗   ██╗███╗   ██╗███████╗██████╗ ██████╗ ██╗██████╗ 
██╔════╝██╔════╝██╔══██╗████╗  ██║████╗  ██║██╔════╝██╔══██╗██╔══██╗██║██╔══██╗
███████╗██║     ███████║██╔██╗ ██║██╔██╗ ██║█████╗  ██████╔╝██║  ██║██║██████╔╝
╚════██║██║     ██╔══██║██║╚██╗██║██║╚██╗██║██╔══╝  ██╔══██╗██║  ██║██║██╔══██╗
███████║╚██████╗██║  ██║██║ ╚████║██║ ╚████║███████╗██║  ██║██████╔╝██║██║  ██║
╚══════╝ ╚═════╝╚═╝  ╚═╝╚═╝  ╚═══╝╚═╝  ╚═══╝╚══════╝╚═╝  ╚═╝╚═════╝ ╚═╝╚═╝  ╚═╝\n
\033[36:2m[◉]Coded by Jord@rootExploit[◉]\n \033[31m
";
if(!$argv[1]){
   echo("[!]WARNING[!]\nFalta de argumento!!!\npara usar digite ./scanner.php https://www.redhat.com/\n\n");
   exit();
}
$url = $argv[1];
echo "Scanner Em andamento...";
sleep(2);
echo("\n \033[3;5m[+]Site──➤$url\n\n");
foreach($pag as $link){
    $mac = $url.$link;
    $enviando = get_headers($mac)[0];
    $not = substr($enviando, 9, 3);
    if($not != 200 ){
        //caso vd queira pode comentar essa parte pra que só  seja printado o request 200 
           echo "\033[0;31m";
           echo "[✘]Pag Não localizada──➤" . $url.$link . "\n";
    }else{
        echo "\033[0;32m";
        echo("[✔]Pag localizada──➤" . $mac . "\n");
    }
}
?>

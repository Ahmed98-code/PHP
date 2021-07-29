{\rtf1\ansi\ansicpg1252\cocoartf1671\cocoasubrtf600
{\fonttbl\f0\fmodern\fcharset0 Courier;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\sl280\partightenfactor0

\f0\fs24 \cf2 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 <?php\
class Mazzo\{\
    private $carte=[];\
    private $tavolo=[];\
    private $semi=['cuori','quadri','fiori','picche'];\
\
    public function __construct()\{\
\
        foreach($this->semi as $seme)\{\
            for($n=1; $n<=13; $n++)\{ //per ogni seme presente nell'array semi\{\
                $this->carte[]=['seme'=>$seme, 'numero'=>$n];\
            \}\
        \}\
       \
    \}\
    public function mischia()\{\
        shuffle($this->carte);\
    \}\
    public function scendi()\{\
        $carta=array_pop($this->carte);\
        array_push($this->tavolo,$carta);\
\
    \}\
    public function mostra()\{\
        foreach($this->tavolo as $carta)\{\
            echo $carta['numero'] . ' di ' . $carta['seme'] . '<br>';\
\
        \}\
\
    \}\
\
\
\}\
}
<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AlberoBundle\Entity\Alberi;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $alberi = new Alberi();

        $return=$this->creaJson();

        $data = json_decode($return);

        $treeMeloni = $alberi->creaArrayAlbero($data->items);

        $form = $this->createFormBuilder()
            ->add('arraySettori', ChoiceType::class, [
                'choices'  => $treeMeloni,
                'multiple' => true,
                'expanded' => true,
                'label'    => 'Sector *: ',
                'attr' => array('class' => 'Form-input' ,)
            ])
            ->getForm();

        $formView = $form->createView();

        return $this->render('default/index.html.twig',array('form' => $formView) );

    }

    function creaJson(){
        return "{\"items\": [
        {
            \"id\": \"01000000\",
            \"text\": \"Agro-alimentare\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01010000\",
            \"text\": \"Ortofrutticoli\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01010100\",
            \"text\": \"Frutta fresca\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01010200\",
            \"text\": \"Frutta secca ed essiccata\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01010300\",
            \"text\": \"Ortaggi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01010400\",
            \"text\": \"Funghi e tartufi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01010500\",
            \"text\": \"Cereali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01010600\",
            \"text\": \"Frutti oleosi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01010700\",
            \"text\": \"Altri ortofrutticoli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020000\",
            \"text\": \"Prodotti dell'industria alimentare\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020100\",
            \"text\": \"Carni fresche e congelate\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020200\",
            \"text\": \"Carni lavorate\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020201\",
            \"text\": \"Carni in scatola ed altre conserve di carne\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020202\",
            \"text\": \"Prosciutti e salumi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020300\",
            \"text\": \"Pesce fresco e congelato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020400\",
            \"text\": \"Conserve di pesce\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020500\",
            \"text\": \"Conserve vegetali\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020501\",
            \"text\": \"Pomodoro\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020502\",
            \"text\": \"Frutta, legumi e verdure (conservate, essiccate, liofilizzate, disidratate, in scatola…\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020503\",
            \"text\": \"Sottolio e sottaceto\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020504\",
            \"text\": \"Marmellate e confetture\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020600\",
            \"text\": \"Frutta e verdura surgelata\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020700\",
            \"text\": \"Paste alimentari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020800\",
            \"text\": \"Farine\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020900\",
            \"text\": \"Industria lattiero-casearia\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020901\",
            \"text\": \"Latte, panna, yogurt ed altri derivati del latte\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020900\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020902\",
            \"text\": \"Formaggi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020900\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01020903\",
            \"text\": \"Burro\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01020900\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021000\",
            \"text\": \"Uova\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021100\",
            \"text\": \"Pane ed altri prodotti da forno\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021101\",
            \"text\": \"Pane\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021102\",
            \"text\": \"Prodotti da forno secchi (fette biscottate , grissini, crackers)\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021103\",
            \"text\": \"Prodotti da forno soffici ad uso continuativo(pizza e basi per pizza, brioches, merendine)\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021104\",
            \"text\": \"Prodotti da forno soffici per ricorrenza(panettoni, pandori, colombe)\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021200\",
            \"text\": \"Industria dolciaria\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021201\",
            \"text\": \"Pasticceria e Biscotteria\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021202\",
            \"text\": \"Cioccolato\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021203\",
            \"text\": \"Gelati\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021204\",
            \"text\": \"Altro prodotti dolciari (caramelle, confetti, torroni, budini)\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021205\",
            \"text\": \"Coni, cialde e cannoli (bucce)\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021206\",
            \"text\": \"SEMILAVORATI PER PASTICCERIA E GELATERIA\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021300\",
            \"text\": \"Olii e grassi\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021301\",
            \"text\": \"Olii di oliva\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021302\",
            \"text\": \"Olii di semi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021303\",
            \"text\": \"Margarina\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021304\",
            \"text\": \"Grassi animali\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021400\",
            \"text\": \"Piatti pronti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021500\",
            \"text\": \"Droghe, spezie ed erboristeria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021600\",
            \"text\": \"Prodotti alimentari biologici e dietetici\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021601\",
            \"text\": \"Prodotti destinati ad una alimentazione particolare(dietetici,  alimenti per infanzia..)\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021602\",
            \"text\": \"Prodotti Biologici\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021700\",
            \"text\": \"Altri prodotti dell'industria alimentare\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021701\",
            \"text\": \"Gastronomia, cibi etnici e alimenti preparati diversi (inclusi dadi ed estratti per brodo, condimenti , sughi e ragù pronti)\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021702\",
            \"text\": \"Cereali prima colazione patatine e snack salati\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021703\",
            \"text\": \"Essenze ed estratti, aromi, lieviti\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021704\",
            \"text\": \"Miele\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021705\",
            \"text\": \"Materie prime per industria alimentare\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021706\",
            \"text\": \"Aceto\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01021700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021800\",
            \"text\": \"Prodotti di quarta e quinta gamma\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01021900\",
            \"text\": \"HALAL\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01022000\",
            \"text\": \"KOSHER\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030000\",
            \"text\": \"Industria delle bevande\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030100\",
            \"text\": \"Industria enologica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030200\",
            \"text\": \"Bevande alcoliche diverse dal vino\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030300\",
            \"text\": \"Bevande analcoliche\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"01030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030301\",
            \"text\": \"Acque minerali\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01030300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030302\",
            \"text\": \"Bevande analcoliche\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01030300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030303\",
            \"text\": \"Succhi e nettari di frutta e verdura\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"01030300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030400\",
            \"text\": \"Altre bevande\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01030500\",
            \"text\": \"Vino e altre bevande\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01040000\",
            \"text\": \"Prodotti agricoli non alimentari\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01040100\",
            \"text\": \"Florovivaismo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01040200\",
            \"text\": \"Sale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01040300\",
            \"text\": \"Tabacco\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01040400\",
            \"text\": \"Altri prodotti agricoli non alimentari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01050000\",
            \"text\": \"Zootecnia\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01050100\",
            \"text\": \"Allevamenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01050200\",
            \"text\": \"Prodotti ed attrezzature\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01050300\",
            \"text\": \"Animali domestici e relativi prodotti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01050400\",
            \"text\": \"Altri prodotti zootecnici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01060000\",
            \"text\": \"Riso\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01070000\",
            \"text\": \"Zucchero\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01080000\",
            \"text\": \"Alimenti surgelati\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01090000\",
            \"text\": \"Prodotto coloniali\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01090100\",
            \"text\": \"Caffè\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01090200\",
            \"text\": \"Tè\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01090300\",
            \"text\": \"Altro prodotto coloniali ( cacao, orzo, camomilla, infusi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100000\",
            \"text\": \"Distribuzione\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100100\",
            \"text\": \"Distribuzione Drogheria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100200\",
            \"text\": \"Distribuzione surgelati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100300\",
            \"text\": \"Distribuzione carne\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100400\",
            \"text\": \"Distribuzione pesce\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100500\",
            \"text\": \"Distribuzione frutta\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100600\",
            \"text\": \"Distribuzione generale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100700\",
            \"text\": \"Distribuzione lattiero-caseario\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01100800\",
            \"text\": \"Distribuzione bevande\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01200000\",
            \"text\": \"Organizzazioni ed Enti Agroalimentare\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"01000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01200100\",
            \"text\": \"Consorzi tutela agroalimentare\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01200000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01200200\",
            \"text\": \"Centri delle Camere di Commercio Agroalimentare\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01200000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"01200300\",
            \"text\": \"Stampa settore agroalimentare\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"01200000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02000000\",
            \"text\": \"Abbigliamento e tessili\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02010000\",
            \"text\": \"Maglieria e calzetteria\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02010100\",
            \"text\": \"Alta qualita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02010200\",
            \"text\": \"Media qualita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02010300\",
            \"text\": \"T-shirts\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02010400\",
            \"text\": \"Calze e collants\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02010500\",
            \"text\": \"Altra maglieria e calzetteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02020000\",
            \"text\": \"Intimo, mare e corsetteria\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02020100\",
            \"text\": \"Intimo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02020200\",
            \"text\": \"Biancheria da notte\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02020300\",
            \"text\": \"Mare e corsetteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02020400\",
            \"text\": \"Abbigliamento da camera\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02020500\",
            \"text\": \"Altro intimo, mare e corsetteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02030000\",
            \"text\": \"Abiti casual e da lavoro\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02030100\",
            \"text\": \"Casual\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02030200\",
            \"text\": \"Abiti da lavoro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02030300\",
            \"text\": \"Uniformi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02030400\",
            \"text\": \"Abiti pubblicitari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02030500\",
            \"text\": \"Altri abiti casual e da lavoro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02040000\",
            \"text\": \"Confezioni per uomo\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02040100\",
            \"text\": \"Alta qualita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02040200\",
            \"text\": \"Media qualita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02040300\",
            \"text\": \"Impermeabili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02040400\",
            \"text\": \"Abiti da cerimonia e da sera\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02040500\",
            \"text\": \"Taglie speciali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02040600\",
            \"text\": \"Capi di abbigliamento di seconda mano\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02040700\",
            \"text\": \"Altre confezioni per uomo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050000\",
            \"text\": \"Confezioni per donna\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050100\",
            \"text\": \"Alta qualita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050200\",
            \"text\": \"Media qualita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050300\",
            \"text\": \"Cappotti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050400\",
            \"text\": \"Impermeabili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050500\",
            \"text\": \"Taglie speciali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050600\",
            \"text\": \"Abiti da maternita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050700\",
            \"text\": \"Abiti da cerimonia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050800\",
            \"text\": \"Abiti da sera\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02050900\",
            \"text\": \"Abiti da sposa\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02051000\",
            \"text\": \"Capi di abbigliamento di seconda mano\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02051100\",
            \"text\": \"Altre confezioni per donna\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02060000\",
            \"text\": \"Confezioni per bambino\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02060100\",
            \"text\": \"Alta qualita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02060200\",
            \"text\": \"Media qualita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02060300\",
            \"text\": \"Cappotti e impermeabili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02060400\",
            \"text\": \"Biancheria intima e da notte\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02060500\",
            \"text\": \"Accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02060600\",
            \"text\": \"Altre confezioni per bambino\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02070000\",
            \"text\": \"Abbigliamento in pelle e pellicce\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02070100\",
            \"text\": \"Uomo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02070200\",
            \"text\": \"Donna\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080000\",
            \"text\": \"Accessori\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080100\",
            \"text\": \"Sciarpe e scialli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080200\",
            \"text\": \"Cravatte\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080300\",
            \"text\": \"Cappelli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080400\",
            \"text\": \"Parrucche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080500\",
            \"text\": \"Guanti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080600\",
            \"text\": \"Fazzoletti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080700\",
            \"text\": \"Merceria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080800\",
            \"text\": \"Tessuti in crine\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02080900\",
            \"text\": \"Ricami, pizzi e merletti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02081000\",
            \"text\": \"Ombrelli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02081100\",
            \"text\": \"Altri accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090000\",
            \"text\": \"Pelli ed articoli di pelletteria\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090100\",
            \"text\": \"Articoli in pelle o cuoio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090200\",
            \"text\": \"Articoli di pelliccia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090300\",
            \"text\": \"Borse\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090400\",
            \"text\": \"Valigie\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090500\",
            \"text\": \"Borse per la scuola, valigette portadocumenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090600\",
            \"text\": \"Cinture e piccola pelletteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090700\",
            \"text\": \"Complementi in metallo per articoli di pelletteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02090800\",
            \"text\": \"Altre pelli ed articoli di pelletteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02100000\",
            \"text\": \"Calzature\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02100100\",
            \"text\": \"Calzature in pelle\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02100200\",
            \"text\": \"Calzature in altri materiali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02100300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02100400\",
            \"text\": \"Altre calzature\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02110000\",
            \"text\": \"Stocks\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02110100\",
            \"text\": \"Capi di abbigliamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02110200\",
            \"text\": \"Calzature\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02110300\",
            \"text\": \"Altri stocks\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02120000\",
            \"text\": \"Fibre e filati\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02120100\",
            \"text\": \"Fibre e cascami\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02120200\",
            \"text\": \"Filati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02120300\",
            \"text\": \"Altre fibre e filati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130000\",
            \"text\": \"Tessuti per abbigliamento\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130100\",
            \"text\": \"Tessuti in lana e misti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130200\",
            \"text\": \"Tessuti in cotone e fibre naturali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130300\",
            \"text\": \"Tessuti in fibre artificiali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130400\",
            \"text\": \"Velluto e velluto a coste\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130500\",
            \"text\": \"Tessuti per impermeabili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130600\",
            \"text\": \"Fodere\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130700\",
            \"text\": \"Tessuti per biancheria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130800\",
            \"text\": \"Tessuti di pelliccia sintetica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02130900\",
            \"text\": \"Tessuti per cravatte\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02131000\",
            \"text\": \"Altri tessuti per abbigliamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"02130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02140000\",
            \"text\": \"Produzione di capi di abbigliamento per conto terzi\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"02150000\",
            \"text\": \"Altri capi di abbigliamento\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"02000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03000000\",
            \"text\": \"Cosmetici, gioielli, sport, ottica, tempo libero\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03010000\",
            \"text\": \"Cosmetici e prodotti per l'igiene personale\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"03000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03010100\",
            \"text\": \"Profumi e cosmetici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03010200\",
            \"text\": \"Prodotti per l'igiene personale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03010300\",
            \"text\": \"Prodotti per l'igiene dei bambini\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03010400\",
            \"text\": \"Accessori per l'igiene\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03010500\",
            \"text\": \"Completi per manicure, borse per cosmetici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03010600\",
            \"text\": \"Altri cosmetici e prodotti per l'igiene personale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020000\",
            \"text\": \"Gioielli e bigiotteria\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"03000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020100\",
            \"text\": \"Gioielli in oro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020200\",
            \"text\": \"Gioielli in argento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020300\",
            \"text\": \"Bigiotteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020400\",
            \"text\": \"Articoli fantasia in plastica o metallo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020500\",
            \"text\": \"Montature di anelli, componenti in oro e argento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020600\",
            \"text\": \"Scatole e cofanetti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020700\",
            \"text\": \"Pietre preziose, perle naturali e coltivate\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03020800\",
            \"text\": \"Altri gioielli e bigiotteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03030000\",
            \"text\": \"Orologi ed altri strumenti\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"03000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03030100\",
            \"text\": \"Orologi  esclusi quelli da polso, sveglie, cronometri, orologi da viaggio e componenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03030200\",
            \"text\": \"Orologi da polso e componenti, cinturini preziosi e non\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03030300\",
            \"text\": \"Barometri, termometri\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03030400\",
            \"text\": \"Orologi digitali, casse di orologi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03030500\",
            \"text\": \"Altri orologi e strumenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03040000\",
            \"text\": \"Articoli sportivi e abbigliamento per lo sport\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"03000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03040100\",
            \"text\": \"Articoli  sportivi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03040200\",
            \"text\": \"Abbigliamento sportivo ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03040300\",
            \"text\": \"Articoli da campeggio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03040400\",
            \"text\": \"Armi e munizioni ad uso sportivo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03040500\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03040600\",
            \"text\": \"Altri articoli sportivi ed abbigliamento per lo sport\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03050000\",
            \"text\": \"Ottica\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"03000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03050100\",
            \"text\": \"Occhiali e prodotti oftalmologici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03050200\",
            \"text\": \"Fotografia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03050300\",
            \"text\": \"Cinematografia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03050400\",
            \"text\": \"Binocoli, telescopi, microscopi, materiali per astronomia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"03050500\",
            \"text\": \"Altri strumenti ottici ed i loro componenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"03050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04000000\",
            \"text\": \"Articoli per la casa e arredamento\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010000\",
            \"text\": \"Arredamento\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"04000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010100\",
            \"text\": \"Mobili per cucine\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010200\",
            \"text\": \"Mobili per sale da pranzo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010300\",
            \"text\": \"Salotti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010400\",
            \"text\": \"Sedie e tavoli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010500\",
            \"text\": \"Letti e mobili per camere da letto\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010600\",
            \"text\": \"Mobili per il bagno\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010700\",
            \"text\": \"Mobili per giardini (in legno, metallo e plastica)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010800\",
            \"text\": \"Mobili in giunco e vimini\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04010900\",
            \"text\": \"Mobili design\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04011000\",
            \"text\": \"Mobili per ufficio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04011100\",
            \"text\": \"Mobili per collettivita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04011200\",
            \"text\": \"Mobili contract\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04011300\",
            \"text\": \"Complementi per l'arredo (specchi, tavolini, ecc)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04011400\",
            \"text\": \"Componenti ed accessori per l'industria del mobile\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04011500\",
            \"text\": \"Altri mobili e componenti per l'arredamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020000\",
            \"text\": \"Biancheria per la casa e tessuti per l'arredamento\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"04000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020100\",
            \"text\": \"Tappeti e moquette\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020200\",
            \"text\": \"Biancheria per la tavola e la cucina\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020300\",
            \"text\": \"Biancheria per il letto\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020400\",
            \"text\": \"Biancheria per il bagno\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020500\",
            \"text\": \"Coperte\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020600\",
            \"text\": \"Copriletto\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020700\",
            \"text\": \"Tappezzerie\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020800\",
            \"text\": \"Tessuti spalmati e finte pelli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04020900\",
            \"text\": \"Tessuti per il rivestimento di pareti e carte da parati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04021000\",
            \"text\": \"Tende e tendaggi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04021100\",
            \"text\": \"Tessuti per mobili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04021200\",
            \"text\": \"Altra biancheria per la casa e tessuti per l'arredamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030000\",
            \"text\": \"Elettrodomestici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"04000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030100\",
            \"text\": \"Cucine e forni\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030200\",
            \"text\": \"Frigoriferi e congelatori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030300\",
            \"text\": \"Lavabiancheria, lavastoviglie, asciugabiancheria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030400\",
            \"text\": \"Aspirapolvere, lavatappeti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030500\",
            \"text\": \"Scaldabagno elettrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030600\",
            \"text\": \"Scaldabagno a gas\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030700\",
            \"text\": \"Impianti di riscaldamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030800\",
            \"text\": \"Condizionatori d'aria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04030900\",
            \"text\": \"Piccoli elettrodomestici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04031000\",
            \"text\": \"Altri elettrodomestici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04031100\",
            \"text\": \"Componenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04040000\",
            \"text\": \"Articoli per l'illuminazione\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"04000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04040100\",
            \"text\": \"Articoli per l'illuminazione domestica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04040200\",
            \"text\": \"Articoli per l'illuminazione tecnico-industriale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04040300\",
            \"text\": \"Articoli per l'illuminazione di uffici e comunita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04040400\",
            \"text\": \"Articoli per l'illuminazione pubblica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04040500\",
            \"text\": \"Insegne e pubblicita' luminose\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04040600\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04040700\",
            \"text\": \"Altri articoli per l'illuminazione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050000\",
            \"text\": \"Articoli casalinghi   .\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"04000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050100\",
            \"text\": \"Articoli in metallo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050200\",
            \"text\": \"Articoli in plastica e gomma\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050300\",
            \"text\": \"Articoli in ceramica e porcellana\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050400\",
            \"text\": \"Articoli in vetro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050500\",
            \"text\": \"Articoli in legno\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050600\",
            \"text\": \"Articoli monouso casalinghi o per il catering\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050700\",
            \"text\": \"Prodotti per la pulizia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050800\",
            \"text\": \"Accessori per il bagno\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04050900\",
            \"text\": \"Altri articoli casalinghi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04060000\",
            \"text\": \"Giocattoli e giochi\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"04000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04060100\",
            \"text\": \"Giocattoli per la prima infanzia (0-2 anni) ed articoli per la puericoltura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04060200\",
            \"text\": \"Giocattoli e giochi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04060300\",
            \"text\": \"Modellismo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04060400\",
            \"text\": \"Attrezzature ed equipaggiamenti da gioco\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070000\",
            \"text\": \"Articoli decorativi e da regalo\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"04000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070100\",
            \"text\": \"Articoli in marmo, alabastro, onice ed altre pietre\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070200\",
            \"text\": \"Articoli in ceramica, porcellana e terracotta\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070300\",
            \"text\": \"Articoli in vetro e cristallo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070400\",
            \"text\": \"Articoli in legno e vimini\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070500\",
            \"text\": \"Articoli in pelle\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070600\",
            \"text\": \"Articoli in plastica e acrilico\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070700\",
            \"text\": \"Articoli in metallo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070800\",
            \"text\": \"Articoli per fumatori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04070900\",
            \"text\": \"Articoli promozionali e pubblicitari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071000\",
            \"text\": \"Gadgets\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071100\",
            \"text\": \"Arte e galleria d'arte\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071200\",
            \"text\": \"Antiquariato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071300\",
            \"text\": \"Cornici e modanature\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071400\",
            \"text\": \"Articoli da regalo in carta\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071500\",
            \"text\": \"Articoli religiosi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071600\",
            \"text\": \"Articoli funerari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071700\",
            \"text\": \"Articoli da giardino\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071800\",
            \"text\": \"Souvenirs\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04071900\",
            \"text\": \"Artigianato e articoli lavorati all'uncinetto\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04072000\",
            \"text\": \"Bomboniere\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04072100\",
            \"text\": \"Articoli diversi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04072200\",
            \"text\": \"Altri articoli decorativi e da regalo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"04070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"04080000\",
            \"text\": \"Artigianato\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"04000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05000000\",
            \"text\": \"Macchinari\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05010000\",
            \"text\": \"Macchine ed attrezzature per agricoltura, orticoltura e giardinaggio\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05010100\",
            \"text\": \"Macchine agricole e per l'orticoltura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05010200\",
            \"text\": \"Attrezzature per il giardinaggio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05010300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05010400\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05010500\",
            \"text\": \"Altre macchine ed attrezzature per agricoltura, orticoltura e giardinaggio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020000\",
            \"text\": \"Macchine per l'industria alimentare\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020100\",
            \"text\": \"Macchine per l'industria molitoria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020200\",
            \"text\": \"Macchine per pastifici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020300\",
            \"text\": \"Macchine per panifici e per l'industria dolciaria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020400\",
            \"text\": \"Macchine per l'industria lattiero-casearia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020500\",
            \"text\": \"Macchine per l'industria della carne\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020600\",
            \"text\": \"Macchine per l'industria delle conserve alimentari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020700\",
            \"text\": \"Macchine per l'industria delle bevande\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020800\",
            \"text\": \"Macchine per la produzione di olii e grassi alimentari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05020900\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05021000\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05021100\",
            \"text\": \"Altre macchine per l'industria alimentare\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030000\",
            \"text\": \"Macchine per l'edilizia e per la produzione di materiali edili\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030100\",
            \"text\": \"Attrezzature movimento terra e macchine per lavori civili e stradali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030200\",
            \"text\": \"Gru, piattaforme sopraelevate e loro componenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030300\",
            \"text\": \"Betoniere ed attrezzature per produzione, trasporto e lavorazione del calcestruzzo (compresi casseforme e additivi)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030400\",
            \"text\": \"Altre attrezzature e macchine per l'edilizia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030500\",
            \"text\": \"Attrezzature per la lavorazione del vetro e simili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030600\",
            \"text\": \"Macchine per la produzione di materie ceramiche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030700\",
            \"text\": \"Macchine ed utensili per la lavorazione del marmo e della pietra, attrezzature per cave\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030800\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05030900\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05031000\",
            \"text\": \"Altre macchine e attrezzature per la produzione di materiali edili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05040000\",
            \"text\": \"Attrezzature per l'industria chimica e petrolifera\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05040100\",
            \"text\": \"Attrezzature per l'industria petrolifera\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05040200\",
            \"text\": \"Attrezzature per l'industria chimica e petrolchimica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05040300\",
            \"text\": \"Attrezzature per l'industria farmaceutica e cosmetica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05040400\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05040500\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05040600\",
            \"text\": \"Altre attrezzature per l'industria chimica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050000\",
            \"text\": \"Macchine per l'industria tessile\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050100\",
            \"text\": \"Macchine per la filatura e procedimenti analoghi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050200\",
            \"text\": \"Macchine per la tessitura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050300\",
            \"text\": \"Macchine finitrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050400\",
            \"text\": \"Macchine per maglieria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050500\",
            \"text\": \"Macchine per cucire\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050600\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050700\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05050800\",
            \"text\": \"Altre macchine per l'industria tessile\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05060000\",
            \"text\": \"Macchine per la lavorazione delle pelli e del cuoio\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05060100\",
            \"text\": \"Macchine per la concia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05060200\",
            \"text\": \"Macchine per l'industria delle calzature e della pelletteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05060300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05060400\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05060500\",
            \"text\": \"Altre macchine per pelli e cuoio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05070000\",
            \"text\": \"Macchine per l'industria della carta e delle arti grafiche\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05070100\",
            \"text\": \"Macchine grafiche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05070200\",
            \"text\": \"Macchine per la legatoria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05070300\",
            \"text\": \"Macchine per la lavorazione della carta\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05070400\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05070500\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05070600\",
            \"text\": \"Altri macchinari per l'industria della carta\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05080000\",
            \"text\": \"Macchine per la produzione di recipienti per imballaggio\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05080100\",
            \"text\": \"Per recipienti in carta e cartone\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05080200\",
            \"text\": \"Per recipienti in plastica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05080300\",
            \"text\": \"Per recipienti in metallo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05080400\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05080500\",
            \"text\": \"Altre macchine per la produzione di recipienti per imballaggio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05090000\",
            \"text\": \"Macchine confezionatrici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05090100\",
            \"text\": \"Macchine per l'imbottigliamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05090200\",
            \"text\": \"Macchine impacchettatrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05090300\",
            \"text\": \"Attrezzature ausiliarie\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05090400\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05090500\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05090600\",
            \"text\": \"Altre macchine confezionatrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100000\",
            \"text\": \"Impianti ed attrezzature per manutenzione, sollevamento e trasporto\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100100\",
            \"text\": \"Impianti di sollevamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100200\",
            \"text\": \"Carrelli elevatori a forca\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100300\",
            \"text\": \"Macchine per l'imballaggio dei rottami\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100400\",
            \"text\": \"Trasportatori a nastro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100500\",
            \"text\": \"Trasportatori aerei\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100600\",
            \"text\": \"Scaffalature industriali e impianti per l'immagazzinamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100700\",
            \"text\": \"Veicoli per trasporti speciali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100800\",
            \"text\": \"Ascensori per persone, montacarichi e scale mobili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05100900\",
            \"text\": \"Ruote e rotelle\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05101000\",
            \"text\": \"Attrezzature di sollevamento e trasporto per porti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05101100\",
            \"text\": \"Gru mobili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05101200\",
            \"text\": \"Carrelli a mano e piccolo materiale di manutenzione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05101300\",
            \"text\": \"Containers per trasporto\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05101400\",
            \"text\": \"Impianti per sollevamento e trasporto in generale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05101500\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05101600\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05101700\",
            \"text\": \"Altri impianti ed attrezzature per manutenzione, sollevamento e trasporto\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05110000\",
            \"text\": \"Macchine utensili per la lavorazione dei metalli\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05110100\",
            \"text\": \"Macchine utensili a controllo numerico\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05110200\",
            \"text\": \"Centri di lavoro, robotica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05110300\",
            \"text\": \"Macchine utensili speciali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05110400\",
            \"text\": \"Utensili per macchine utensili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05110500\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05110600\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05110700\",
            \"text\": \"Altre macchine utensili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120000\",
            \"text\": \"Attrezzature e impianti per l'industria siderurgica\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120100\",
            \"text\": \"Impianti di fonderia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120200\",
            \"text\": \"Macchine per la lavorazione dell'acciaio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120300\",
            \"text\": \"Stampi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120400\",
            \"text\": \"Macchine per laminatoi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120500\",
            \"text\": \"Forni\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120600\",
            \"text\": \"Impianti per la fabbricazione di tubi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120700\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120800\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05120900\",
            \"text\": \"Altre attrezzature per l'industria siderurgica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130000\",
            \"text\": \"Attrezzature per saldatura e finitura\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130100\",
            \"text\": \"Saldatrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130200\",
            \"text\": \"Materiali per la saldatura (bacchette e gas)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130300\",
            \"text\": \"Attrezzature per il trattamento termico\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130400\",
            \"text\": \"Attrezzature per il trattamento e la finitura di superfici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130500\",
            \"text\": \"Impianti per la verniciatura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130600\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130700\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05130800\",
            \"text\": \"Altre attrezzature per saldatura e finitura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05140000\",
            \"text\": \"Macchine per la produzione di gioielli\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05140100\",
            \"text\": \"Macchine per gioielleria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05140200\",
            \"text\": \"Utensili a mano e strumenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05140300\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05140400\",
            \"text\": \"Altre macchine per la produzione di gioielli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150000\",
            \"text\": \"Macchine per la lavorazione della gomma e della plastica\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150100\",
            \"text\": \"Macchine per l'iniezione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150200\",
            \"text\": \"Macchine per la compressione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150300\",
            \"text\": \"Macchine per la soffiatura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150400\",
            \"text\": \"Macchine per l'estrusione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150500\",
            \"text\": \"Macchine per la saldatura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150600\",
            \"text\": \"Macchine per la vulcanizzazione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150700\",
            \"text\": \"Macchine per la lavorazione della plastica in generale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150800\",
            \"text\": \"Stampi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05150900\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05151000\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05151100\",
            \"text\": \"Altre macchine per la lavorazione della gomma e della plastica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05160000\",
            \"text\": \"Macchine per la lavorazione del legno\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05160100\",
            \"text\": \"Macchine per la lavorazione del legno\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05160000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05160200\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05160000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05160300\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05160000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05160400\",
            \"text\": \"Altre macchine per la lavorazione del legno\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05160000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05170000\",
            \"text\": \"Utensili elettrici e meccanici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05170100\",
            \"text\": \"Utensili elettrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05170200\",
            \"text\": \"Utensili pneumatici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05170300\",
            \"text\": \"Attrezzature per ingrassaggio e lubrificazione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05170400\",
            \"text\": \"Utensili meccanici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05170500\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05170600\",
            \"text\": \"Altri utensili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05180000\",
            \"text\": \"Macchine e procedimenti speciali\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05180200\",
            \"text\": \"Macchine per la fabbricazione di impianti frigoriferi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05180300\",
            \"text\": \"Macchine per l'industria elettrica ed elettronica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05180400\",
            \"text\": \"Macchine per la produzione di bottoni e accessori per l'industria dell'abbigliamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05180500\",
            \"text\": \"Macchine per la produzione di strumenti ottici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05180600\",
            \"text\": \"Macchine per la produzione di strumenti medici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05180700\",
            \"text\": \"Altre macchine e procedimenti speciali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"05180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"05190000\",
            \"text\": \"Altre macchine\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"05000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06000000\",
            \"text\": \"Attrezzature per comunita', esercizi commerciali e servizi\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06010000\",
            \"text\": \"Impianti di refrigerazione commerciale e industriale\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06010100\",
            \"text\": \"Impianti di refrigerazione per usi industriali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06010200\",
            \"text\": \"Impianti di refrigerazione per usi commerciali e professionali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06010300\",
            \"text\": \"Componenti e materiali (evaporatori, condensatori, compressori, valvole, gas)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06010400\",
            \"text\": \"Accessori (cardini, serrature, vassoi, contenitori in acciaio inossidabile)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06010500\",
            \"text\": \"Altri impianti di refrigerazione commerciale e industriale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06020000\",
            \"text\": \"Impianti di riscaldamento e condizionamento dell'aria\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06020100\",
            \"text\": \"Impianti di condizionamento dell'aria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06020200\",
            \"text\": \"Caldaie\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06020300\",
            \"text\": \"Impianti di riscaldamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06020400\",
            \"text\": \"Umidificatori ed essiccatori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06020500\",
            \"text\": \"Impianti di ventilazione ed aerazione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06020600\",
            \"text\": \"Componenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06020700\",
            \"text\": \"Altri impianti di riscaldamento e condizionamento dell'aria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030000\",
            \"text\": \"Impianti anti-inquinamento\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030100\",
            \"text\": \"Impianti per aria e gas\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030200\",
            \"text\": \"Impianti per il trattamento delle acque\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030210\",
            \"text\": \"Impianti per trattamento e potabilizzazione acqua\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030220\",
            \"text\": \"Impianti per la depurazione delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030230\",
            \"text\": \"Impianti per la depurazione meccanica delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030240\",
            \"text\": \"Impianti per la depurazione biologica delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030250\",
            \"text\": \"Impianti per la depurazione chimica-fisica delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030260\",
            \"text\": \"Impianti per la depurazione termica delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030270\",
            \"text\": \"Impianti per il trattamento dei fanghi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030300\",
            \"text\": \"Impianti per la raccolta e lo smaltimento dei rifiuti\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030310\",
            \"text\": \"Impianti per rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030320\",
            \"text\": \"Impianti per la raccolta ed il trasporto dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030330\",
            \"text\": \"Impianti per il trattamento dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030340\",
            \"text\": \"Impianti per lo smaltimento dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030400\",
            \"text\": \"Altri impianti anti-inquinamento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030500\",
            \"text\": \"Impianti per rifiuti speciali e pericolosi\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030510\",
            \"text\": \"Impianti per i rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030520\",
            \"text\": \"Impianti per la raccolta dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030530\",
            \"text\": \"Impianti per il trattamento dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030540\",
            \"text\": \"Impianti per lo smaltimento dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030600\",
            \"text\": \"Impianti per rifiuti riciclabili (recupero materie secondarie)\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030610\",
            \"text\": \"Impianti per rifiuti riciclabili \",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030620\",
            \"text\": \"Impianti per la raccolta dei rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030630\",
            \"text\": \"Impianti per il trattamento dei rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030640\",
            \"text\": \"Impianti per lo smaltimento di residui da rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06030600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030700\",
            \"text\": \"Impianti per il trattamento dell'aria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06030800\",
            \"text\": \"Tecnologie e prodotti per il recupero dei terreni inquinati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031000\",
            \"text\": \"Attrezzature/macchinari per acque\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031010\",
            \"text\": \"Attrezzature/macchinari per il trattamento e potabilizzazione delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031020\",
            \"text\": \"Attrezzature/macchinari per la depurazione delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031030\",
            \"text\": \"Attrezzature/macchinari per il trattamento dei fanghi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031100\",
            \"text\": \"Attrezzature e macchinari per rifiuti\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031110\",
            \"text\": \"Attrezzature (veicoli/macchinari) per rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031120\",
            \"text\": \"Attrezzature (veicoli/macchinari) per la raccolta ed il trasporto dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031130\",
            \"text\": \"Attrezzature (veicoli/macchinari) per il trattamento dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031140\",
            \"text\": \"Attrezzature (veicoli/macchinari) per lo smaltimento dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031200\",
            \"text\": \"Attrezzature e macchinari per rifiuti speciali\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031210\",
            \"text\": \"Attrezzature (veicoli/macchinari) per rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031220\",
            \"text\": \"Attrezzature (veicoli/macchinari) per la raccolta dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031230\",
            \"text\": \"Attrezzature (veicoli/macchinari) per il trattamento dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031240\",
            \"text\": \"Attrezzature (veicoli/macchinari) per lo smaltimento dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031200\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031300\",
            \"text\": \"Attrezzature (veicoli/macchinari) per lo smaltimento dei rifiuti speciali e pericolosi\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031310\",
            \"text\": \"Attrezzature (veicoli/macchinari) per rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031320\",
            \"text\": \"Attrezzature (veicoli/macchinari) per la raccolta dei rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031330\",
            \"text\": \"Attrezzature (veicoli/macchinari) per il trattamento dei rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031340\",
            \"text\": \"Attrezzature (veicoli/macchinari) per lo smaltimento di residui da rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031300\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031400\",
            \"text\": \"Strumenti per il trattamento delle acque\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031410\",
            \"text\": \"Strumenti per il trattamento e potabilizzazione delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031400\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031420\",
            \"text\": \"Strumenti per la depurazione delle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031400\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031430\",
            \"text\": \"Strumenti per il trattamento dei fanghi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031400\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031500\",
            \"text\": \"Strumenti per rifiuti solidi urbani\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031510\",
            \"text\": \"Strumenti per la raccolta ed il trattamento dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031520\",
            \"text\": \"Strumenti per il trattamento dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031530\",
            \"text\": \"Strumenti per lo smaltimento dei rifiuti solidi urbani\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031500\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031600\",
            \"text\": \"Strumenti per i rifiuti speciali e pericolosi\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031610\",
            \"text\": \"Strumenti per la raccolta dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031620\",
            \"text\": \"Strumenti per il trattamento dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031630\",
            \"text\": \"Strumenti per lo smaltimento dei rifiuti speciali e pericolosi\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031600\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031700\",
            \"text\": \"Strumenti per i rifiuti riciclabili\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031710\",
            \"text\": \"Strumenti per la raccolta dei rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031720\",
            \"text\": \"Strumenti per il trattamento dei rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031730\",
            \"text\": \"Strumenti per lo smaltimento di residui da rifiuti riciclabili\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"06031700\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031800\",
            \"text\": \"Macchinari e attrezzature per il trattamento dell'aria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06031900\",
            \"text\": \"Tecnologie e strumenti per il disinquinamento acustico/rumore\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06040000\",
            \"text\": \"Attrezzature per autofficine\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06040100\",
            \"text\": \"Macchinari ed attrezzature per autofficine\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06040200\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06040300\",
            \"text\": \"Altre attrezzature per autofficine\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06050000\",
            \"text\": \"Distributori automatici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06050100\",
            \"text\": \"Distributori di prodotti alimentari e bevande\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06050200\",
            \"text\": \"Distributori di altri articoli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06050300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06050400\",
            \"text\": \"Altri distributori automatici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06060000\",
            \"text\": \"Attrezzature per saloni di bellezza, parrucchieri, fisioterapisti, centri di fitness\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06070000\",
            \"text\": \"Attrezzature per alberghi, ristoranti e bar\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06070100\",
            \"text\": \"Macchine per la preparazione del cibo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06070200\",
            \"text\": \"Attrezzature per grandi cucine\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06070300\",
            \"text\": \"Attrezzature per bar\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06070400\",
            \"text\": \"Bilance e strumenti per la pesatura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06070500\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06070600\",
            \"text\": \"Altre attrezzature per alberghi, ristoranti e bar\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06080000\",
            \"text\": \"Attrezzature per lavanderie e tintorie\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06090000\",
            \"text\": \"Apparecchiature e materiali per la sicurezza\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06090100\",
            \"text\": \"Sistemi antifurto e di sorveglianza\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06090200\",
            \"text\": \"Sistemi antincendio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06090300\",
            \"text\": \"Accessori per allarmi e sistemi di sicurezza\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06090400\",
            \"text\": \"Cassette di sicurezza, porte blindate, vetri blindati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06090500\",
            \"text\": \"Veicoli speciali blindati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06090600\",
            \"text\": \"Abbigliamento protettivo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06090700\",
            \"text\": \"Altro materiale ed attrezzature di sicurezza\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06100000\",
            \"text\": \"Attrezzature per ufficio\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06100100\",
            \"text\": \"Macchine ed attrezzature (esclusa informatica)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06100200\",
            \"text\": \"Materiale di cancelleria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06100300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06100400\",
            \"text\": \"Altre attrezzature per ufficio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06110000\",
            \"text\": \"Attrezzature mediche ed ospedaliere\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06110100\",
            \"text\": \"Apparecchiature elettriche ed elettroniche per medicina e chirurgia (inclusi raggi-x)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06110200\",
            \"text\": \"Strumenti medici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06110300\",
            \"text\": \"Attrezzature per cliniche e ospedali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06110400\",
            \"text\": \"Attrezzature e strumenti per odontoiatria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06110500\",
            \"text\": \"Attrezzature e strumenti per medicina e chirurgia veterinaria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06110600\",
            \"text\": \"Forniture mediche e paramediche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06110700\",
            \"text\": \"Altre attrezzature mediche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06120000\",
            \"text\": \"Apparecchiature scientifiche e di laboratorio\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06130000\",
            \"text\": \"Attrezzature didattiche\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06130100\",
            \"text\": \"Simulatori ed apparecchiature  elettriche ed elettroniche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06130200\",
            \"text\": \"Altre attrezzature didattiche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06140000\",
            \"text\": \"Armi ed attrezzature per la difesa\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06140100\",
            \"text\": \"Materiale elettronico ad uso militare\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06140200\",
            \"text\": \"Armi individuali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06140300\",
            \"text\": \"Cartucce e munizioni\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06140400\",
            \"text\": \"Armamenti pesanti e veicoli militari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06140500\",
            \"text\": \"Altre armi ed  attrezzature per la difesa\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06150000\",
            \"text\": \"Attrezzature industriali diversi\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"06000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06150100\",
            \"text\": \"Attrezzature per filtrazione e depurazione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06150200\",
            \"text\": \"Attrezzature per depolverizzazione e pulizia industriale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"06150300\",
            \"text\": \"Altre attrezzature industriali diverse\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"06150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07000000\",
            \"text\": \"Veicoli, industria meccanica, elettrotecnica ed elettronica\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07010000\",
            \"text\": \"Autoveicoli, motocicli, biciclette\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07010100\",
            \"text\": \"Autovetture e loro componenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07010200\",
            \"text\": \"Autocarri e veicoli industriali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07010300\",
            \"text\": \"Caravan e camping\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07010400\",
            \"text\": \"Motocicli e biciclette\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07010500\",
            \"text\": \"Usato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07010600\",
            \"text\": \"Altri autoveicoli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020000\",
            \"text\": \"Nautica\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020100\",
            \"text\": \"Motoscafi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020200\",
            \"text\": \"Barche a vela\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020300\",
            \"text\": \"Barche a remi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020400\",
            \"text\": \"Battelli gonfiabili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020500\",
            \"text\": \"Tavole da surf\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020600\",
            \"text\": \"Altre imbarcazioni\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020700\",
            \"text\": \"Motori entrobordo e fuoribordo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020800\",
            \"text\": \"Strumenti nautici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07020900\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07021000\",
            \"text\": \"Altra nautica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07030000\",
            \"text\": \"Motori a combustione interna e turbine\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07030100\",
            \"text\": \"Motori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07030200\",
            \"text\": \"Turbine\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07030300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07030400\",
            \"text\": \"Altri motori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07040000\",
            \"text\": \"Impianti idraulici, pneumatici e idropneumatici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07040100\",
            \"text\": \"Impianti idraulici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07040200\",
            \"text\": \"Impianti pneumatici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07040300\",
            \"text\": \"Impianti idropneumatici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07040400\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07040500\",
            \"text\": \"Altri impianti idraulici, pneumatici e idropneumatici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07050000\",
            \"text\": \"Pompe e compressori\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07050100\",
            \"text\": \"Pompe\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07050200\",
            \"text\": \"Compressori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07050300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07050400\",
            \"text\": \"Altre pompe e compressori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07060000\",
            \"text\": \"Organi di trasmissione\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07060100\",
            \"text\": \"Cuscinetti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07060200\",
            \"text\": \"Ingranaggi, riduttori, trasmissioni meccaniche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07060300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07060400\",
            \"text\": \"Altri organi di trasmissione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07070000\",
            \"text\": \"Motori elettrici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07070100\",
            \"text\": \"Motori per uso industriale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07070200\",
            \"text\": \"Piccoli motori frazionali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07070300\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07070400\",
            \"text\": \"Altri motori elettrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07080000\",
            \"text\": \"Attrezzature elettriche ad alta tensione\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07080100\",
            \"text\": \"Generatori di corrente elettrica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07080200\",
            \"text\": \"Trasformatori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07080300\",
            \"text\": \"Attrezzature per ingegneri ed imprese edili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07080400\",
            \"text\": \"Pali, isolatori ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07080500\",
            \"text\": \"Altre attrezzature\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07090000\",
            \"text\": \"Materiale elettrico a basso voltaggio\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07090100\",
            \"text\": \"Quadri di comando\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07090200\",
            \"text\": \"Generatori e gruppi elettrogeni a bassa tensione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07090300\",
            \"text\": \"Interruttori, rele', fusibili e apparecchi di regolazione e di controllo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07090400\",
            \"text\": \"Spine, prese di corrente, interruttori a muro per uso domestico\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07090500\",
            \"text\": \"Altro materiale elettrico a basso voltaggio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07100000\",
            \"text\": \"Cavi elettrici ed accessori\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07100100\",
            \"text\": \"Cavi elettrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07100200\",
            \"text\": \"Accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07100300\",
            \"text\": \"Altri cavi elettrici ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07110000\",
            \"text\": \"Altro materiale elettrico\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07110100\",
            \"text\": \"Accumulatori, batterie, pile\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07110200\",
            \"text\": \"Materiale antideflagrante\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07110300\",
            \"text\": \"Isolanti e materiale dielettrico\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07110400\",
            \"text\": \"Ingegneria nucleare\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07110500\",
            \"text\": \"Materiale per energia solare ed energie rinnovabili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07110600\",
            \"text\": \"Altro materiale elettrico\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07120000\",
            \"text\": \"Impianti di telecomunicazione\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07120100\",
            \"text\": \"Telefoni\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07120200\",
            \"text\": \"Segreterie telefoniche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07120300\",
            \"text\": \"Altri impianti di telecomunicazione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07120000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07130000\",
            \"text\": \"Elettronica industriale e professionale\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07130100\",
            \"text\": \"Elettronica per uso industriale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07130200\",
            \"text\": \"Elettronica per uso professionale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07130300\",
            \"text\": \"Componenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07130400\",
            \"text\": \"Altra elettronica industriale e professionale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07130000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140000\",
            \"text\": \"Elettronica di consumo\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140100\",
            \"text\": \"Strumenti musicali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140200\",
            \"text\": \"Hi-fi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140300\",
            \"text\": \"Dischi, musicassette, nastri, videocassette e loro componenti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140400\",
            \"text\": \"Televisori e radio, audiovisivi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140500\",
            \"text\": \"Antenne\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140600\",
            \"text\": \"Pezzi di ricambio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140700\",
            \"text\": \"Videogiochi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07140800\",
            \"text\": \"Altra elettronica di consumo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07140000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07150000\",
            \"text\": \"Informatica\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07150100\",
            \"text\": \"Computers\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07150200\",
            \"text\": \"Impianti periferici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07150300\",
            \"text\": \"Software\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07150400\",
            \"text\": \"Componenti ed accessori\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07150500\",
            \"text\": \"Altro hardware e software per l'informatica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07150000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07160000\",
            \"text\": \"Attrezzature di automazione e controllo\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07160100\",
            \"text\": \"Strumenti elettrici ed elettronici di misura e di controllo\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"07160000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07160110\",
            \"text\": \"Sistemi di misura regolazione ed analisi per rifiuti e suolo\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"07160100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07160120\",
            \"text\": \"Sistemi di misura regolazione ed analisi per acqua\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"07160100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07160130\",
            \"text\": \"Sistemi di misura regolazione ed analisi per aria\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"07160100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07160200\",
            \"text\": \"Attrezzature di automazione e controllo industriale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07160000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07160300\",
            \"text\": \"Altre attrezzature di automazione e controllo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07160000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07170000\",
            \"text\": \"Strumenti di misura non elettrici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07170100\",
            \"text\": \"Bilance\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07170200\",
            \"text\": \"Strumenti per la misura dei liquidi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07170300\",
            \"text\": \"Macchine e dispositivi di prova\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07170400\",
            \"text\": \"Altri strumenti ed apparecchiature di misura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07170000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07180000\",
            \"text\": \"Navi e attrezzature navali\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07180100\",
            \"text\": \"Cantieri navali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07180200\",
            \"text\": \"Strumenti ed accessori per navi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07180300\",
            \"text\": \"Altre navi ed attrezzature navali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07180000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07190000\",
            \"text\": \"Attrezzature ferroviarie e funiviarie\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07190100\",
            \"text\": \"Materiale rotabile\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07190000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07190200\",
            \"text\": \"Infrastrutture e sovrastrutture per strade ferrate\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07190000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07190300\",
            \"text\": \"Pezzi di ricambio e componenti per materiale rotabile\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07190000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07190400\",
            \"text\": \"Altre attrezzature ferroviarie e funiviarie\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07190000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07200000\",
            \"text\": \"Attrezzature aeronautiche ed aeroportuali\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07200100\",
            \"text\": \"Attrezzature aeronautiche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07200000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07200200\",
            \"text\": \"Apparecchiature, componenti e pezzi di ricambio per aerei\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07200000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07200300\",
            \"text\": \"Attrezzature aeroportuali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07200000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07200400\",
            \"text\": \"Altre attrezzature aeronautiche ed aeroportuali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"07200000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"07210000\",
            \"text\": \"MECCATRONICA\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"07000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08000000\",
            \"text\": \"Materiali e forniture industriali\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08010000\",
            \"text\": \"Minerali e metalli\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08010100\",
            \"text\": \"Minerali non metallici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08010200\",
            \"text\": \"Minerali di ferro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08010300\",
            \"text\": \"Minerali di metalli non ferrosi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08010400\",
            \"text\": \"Altri minerali e metalli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020000\",
            \"text\": \"Prodotti siderurgici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020100\",
            \"text\": \"Ferri angolari, barre, billette, aste, profilati a u, profilati a t\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020200\",
            \"text\": \"Profilati vari di acciaio, ferri di armatura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020300\",
            \"text\": \"Lamiere, nastri e bobine\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020400\",
            \"text\": \"Acciaio trafilato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020500\",
            \"text\": \"Tubi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020600\",
            \"text\": \"Fili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020700\",
            \"text\": \"Carpenteria in ferro, costruzioni in acciaio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020800\",
            \"text\": \"Prodotti metallici lavorati per deformazione (stampaggio, forgiatura, fucinatura)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08020900\",
            \"text\": \"Prodotti metallici lavorati con asportazione di trucioli (foratura, alesatura, tornitura, segatura, tranciatura)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08021000\",
            \"text\": \"Acciaio speciale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08021100\",
            \"text\": \"Scarti di acciaio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08021200\",
            \"text\": \"Altri prodotti siderurgici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08030000\",
            \"text\": \"Metalli non ferrosi\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08030100\",
            \"text\": \"Getti, pezzi fucinati, stampati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08030200\",
            \"text\": \"Tubi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08030300\",
            \"text\": \"Barre, profilati, lamiere, bobine, nastri, fili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08030400\",
            \"text\": \"Scarti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08030500\",
            \"text\": \"Altri metalli non ferrosi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08040000\",
            \"text\": \"Valvole, raccordi, flange\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08040100\",
            \"text\": \"Valvole e rubinetteria industriale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08040200\",
            \"text\": \"Raccordi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08040300\",
            \"text\": \"Flange\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08040400\",
            \"text\": \"Altre valvole, raccordi , flange\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08040000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050000\",
            \"text\": \"Materiali per l'edilizia\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050100\",
            \"text\": \"Marmi, graniti, pietre e relativi prodotti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050200\",
            \"text\": \"Cemento e prodotti di cemento\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050300\",
            \"text\": \"Calce e gesso, prodotti di calce e gesso\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050400\",
            \"text\": \"Tegole, mattoni, tubi di materie ceramiche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050500\",
            \"text\": \"Prodotti e materiali refrattari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050600\",
            \"text\": \"Vetro e fibre di vetro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050700\",
            \"text\": \"Legno, pannelli e semilavorati in legno per l'edilizia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050800\",
            \"text\": \"Serramenti, porte, finestre, persiane, scale, facciate, cancelli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08050900\",
            \"text\": \"Rivestimenti per il suolo (non tessili), linoleum, parquet\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051000\",
            \"text\": \"Materiali isolanti e impermeabilizzanti, bitumi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051100\",
            \"text\": \"Controsoffitti, pareti, pavimenti sopraelevati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051200\",
            \"text\": \"Lavori di ferro battuto per l'edilizia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051300\",
            \"text\": \"Lavori di carpenteria metallica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051400\",
            \"text\": \"Ponteggi, reti rastrelli, puntelli\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051500\",
            \"text\": \"Case mobili, baracche e containers per cantieri\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051600\",
            \"text\": \"Costruzioni industriali (capannoni) e prefabbricati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051700\",
            \"text\": \"Segnali stradali, pali, guard-rail ed altri\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051800\",
            \"text\": \"Piastrelle in ceramica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08051900\",
            \"text\": \"Pavimenti in terracotta\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08052000\",
            \"text\": \"Mosaici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08052100\",
            \"text\": \"Lavabi, vasche, docce, ecc. ed accessori per il bagno\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08052200\",
            \"text\": \"Rubinetteria sanitaria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08052300\",
            \"text\": \"Tubi, sifoni, raccordi, tubi flessibili per docce, ecc.\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08052400\",
            \"text\": \"Altri materiali per l'edilizia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08050000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060000\",
            \"text\": \"Ferramenta, utensili, fai da te\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060100\",
            \"text\": \"Utensili a mano\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060200\",
            \"text\": \"Maniglie, serrature, cerniere, lucchetti, casseforti e ferramenta per porte e finestre\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060300\",
            \"text\": \"Bulloneria e viteria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060400\",
            \"text\": \"Fili di ferro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060500\",
            \"text\": \"Chiodi, punte, rivetti, aghi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060600\",
            \"text\": \"Molle metalliche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060700\",
            \"text\": \"Fermagli e sistemi di fissaggio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060800\",
            \"text\": \"Catene\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08060900\",
            \"text\": \"Rulli e pennelli per dipingere\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08061000\",
            \"text\": \"Abrasivi (carta, dischi, mole, polveri)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08061100\",
            \"text\": \"Altri articoli per ferramenta, utensili, fai da te\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070000\",
            \"text\": \"Prodotti chimici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070100\",
            \"text\": \"Prodotti chimici per l'agricoltura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070200\",
            \"text\": \"Prodotti farmaceutici e relative materie prime\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070300\",
            \"text\": \"Prodotti veterinari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070400\",
            \"text\": \"Materiali plastici grezzi (resine, granuli, ecc.)\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070500\",
            \"text\": \"Materie coloranti, vernici, pitture, inchiostri, pigmenti e prodotti intermedi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070600\",
            \"text\": \"Mastici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070700\",
            \"text\": \"Detergenti e prodotti per la manutenzione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070800\",
            \"text\": \"Colle e adesivi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08070900\",
            \"text\": \"Esplosivi, polveri\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071000\",
            \"text\": \"Prodotti chimici per l'industria alimentare\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071100\",
            \"text\": \"Prodotti chimici per l'industria tessile\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071200\",
            \"text\": \"Prodotti  chimici per la lavorazione del cuoio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071300\",
            \"text\": \"Prodotti chimici per l'industria della carta\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071400\",
            \"text\": \"Prodotti chimici per l'edilizia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071500\",
            \"text\": \"Prodotti chimici per la metallurgia\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071600\",
            \"text\": \"Prodotti chimici per il trattamento delle acque\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071700\",
            \"text\": \"Prodotti chimici per la carrozzeria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071800\",
            \"text\": \"Prodotti chimici per usi diversi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08071900\",
            \"text\": \"Aerosol\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08072000\",
            \"text\": \"Altri prodotti chimici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080000\",
            \"text\": \"Prodotti di gomma e plastica\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080100\",
            \"text\": \"Tubi e raccordi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080200\",
            \"text\": \"Guarnizioni, rondelle\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080300\",
            \"text\": \"Laminati rigidi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080400\",
            \"text\": \"Fogli in gomma flessibili\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080500\",
            \"text\": \"Prodotti fatti su misura\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080600\",
            \"text\": \"Pezzi stampati\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080700\",
            \"text\": \"Articoli tecnici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080800\",
            \"text\": \"Prodotti e materiali composti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08080900\",
            \"text\": \"Scarti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08081000\",
            \"text\": \"Altri prodotti di gomma e plastica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08080000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08090000\",
            \"text\": \"Prodotti tessili industriali\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100000\",
            \"text\": \"Carta, tipografia, editoria e cartoleria\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100100\",
            \"text\": \"Carta, cartone e pasta\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100200\",
            \"text\": \"Cliche', lastre, nastri ed altri prodotti per l'industria grafica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100300\",
            \"text\": \"Tipografie\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100400\",
            \"text\": \"Case editrici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100500\",
            \"text\": \"Carta cellulosa, carta igienica, tovaglioli, ecc.\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100600\",
            \"text\": \"Prodotti per cartolerie\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100700\",
            \"text\": \"Etichette e nastri adesivi stampati o da stampare\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08100800\",
            \"text\": \"Altri prodotti di carta, per tipografia, editoria e cartoleria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110000\",
            \"text\": \"Materiali per imballaggio\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"08000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110100\",
            \"text\": \"Nastri adesivi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110200\",
            \"text\": \"Recipienti e imballaggi in vetro\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110300\",
            \"text\": \"Recipienti e imballaggi in plastica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110400\",
            \"text\": \"Recipienti e imballaggi in carta e cartone\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110500\",
            \"text\": \"Recipienti e imballaggi metallici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110600\",
            \"text\": \"Recipienti e imballaggi in legno\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110700\",
            \"text\": \"Spaghi, corde, funi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"08110800\",
            \"text\": \"Altri materiali da imballaggio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"08110000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09000000\",
            \"text\": \"Servizi\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09010000\",
            \"text\": \"Servizi di consulenza amministrativa e finanziaria\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09010100\",
            \"text\": \"Contabilita' e bilancio\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09010200\",
            \"text\": \"Revisori dei conti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09010300\",
            \"text\": \"Ricerca, selezione e gestione del personale\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09010400\",
            \"text\": \"Consulenza gestionale e organizzativa\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09010500\",
            \"text\": \"Consulenza fiscale e finanziaria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09010600\",
            \"text\": \"Altri servizi di consulenza amministrativa e finanziaria\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09010700\",
            \"text\": \"Consulenza giuridica\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09020000\",
            \"text\": \"Servizi commerciali\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09020100\",
            \"text\": \"Pubblicita'\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09020200\",
            \"text\": \"Ricerche di mercato\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09020300\",
            \"text\": \"Fiere e mostre\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09020400\",
            \"text\": \"Altri servizi commerciali\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09020000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09030000\",
            \"text\": \"Servizi tecnici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09030100\",
            \"text\": \"Studi di ingegneria e consulenza tecnica\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"09030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09030110\",
            \"text\": \"Servizi di pianificazione, progettazione\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09030100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09030120\",
            \"text\": \"Servizi di consulenza ambientale\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09030100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09030200\",
            \"text\": \"Altri servizi tecnici\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09030000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09040000\",
            \"text\": \"Istruzione e formazione\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09050000\",
            \"text\": \"Servizi sanitari\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060000\",
            \"text\": \"Servizi diversi\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060100\",
            \"text\": \"Architettura e urbanistica\",
            \"livello\": 3,
            \"ultimo_livello\": 0,
            \"parent\": \"09060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060110\",
            \"text\": \"RESTAURO ARTISTICO E STORICO\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060111\",
            \"text\": \"RESTAURO ARCHITETTONICO E STRUTTURALE\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060112\",
            \"text\": \"RESTAURO MONUMENTALE MUSEALE E ARCHEOLOGICO\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060120\",
            \"text\": \"STUDI DI INGEGNERIA\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060130\",
            \"text\": \"STUDI DI ARCHITETTURA\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060140\",
            \"text\": \"PRODOTTI ATTREZZATURE E MATERIALI\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060141\",
            \"text\": \"STRUMENTAZIONE DIAGNOSTICA\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060150\",
            \"text\": \"IMPRESE EDILI PER IL RESTAURO\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060160\",
            \"text\": \"ISTITUTI E ENTI PRIVATI ACCADEMIE ASSOCIAZIONI, UNIVERSITA, ENTI PUBBLICI, REGIONI, COMUNI\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060161\",
            \"text\": \"BANCHE, ISTITUTI DI CREDITO, FONDAZIONI\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060162\",
            \"text\": \"MUSEI, GALLERIE, BIBLIOTECHE E ARCHIVI\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060170\",
            \"text\": \"EDITORIA\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"09060100\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060200\",
            \"text\": \"Riparazione e manutenzione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060300\",
            \"text\": \"Pulizia, disinfezione e disinfestazione\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060400\",
            \"text\": \"Raccolta e smaltimento dei rifiuti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060500\",
            \"text\": \"Servizi di sicurezza\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09060600\",
            \"text\": \"Altri servizi diversi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09060000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09070000\",
            \"text\": \"Trasporti e logistica\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09070100\",
            \"text\": \"Trasporti terrestri\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09070200\",
            \"text\": \"Trasporti marittimi\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09070300\",
            \"text\": \"Trasporti aerei\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09070400\",
            \"text\": \"Altri trasporti\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09070000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09080000\",
            \"text\": \"Servizi di telecomunicazione\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09090000\",
            \"text\": \"Servizi finanziari\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09090100\",
            \"text\": \"Banche\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09090200\",
            \"text\": \"Assicurazioni\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09090300\",
            \"text\": \"Altri servizi finanziari\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09090000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09100000\",
            \"text\": \"Servizi informatici\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09100100\",
            \"text\": \"Servizi e consulenza software e hardware\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"09100000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09110000\",
            \"text\": \"Ricerca e sviluppo\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09150000\",
            \"text\": \"Consulenza e esperti\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"09220000\",
            \"text\": \"Formazione\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"09000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000000\",
            \"text\": \"Energia\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000010\",
            \"text\": \"Energia dalle acque\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000020\",
            \"text\": \"Energia dai rifiuti\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000030\",
            \"text\": \"Energia da biogas\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000040\",
            \"text\": \"Energia elettrica\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000050\",
            \"text\": \"Energia eolica\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000060\",
            \"text\": \"Energia geotermica\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000070\",
            \"text\": \"Energia marina\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10000080\",
            \"text\": \"Energia solare\",
            \"livello\": 4,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"10010000\",
            \"text\": \"Impianti per biogas\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"10000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"11000000\",
            \"text\": \"Biotecnologie\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"11010000\",
            \"text\": \"Biotecnologie applicate all'ambiente\",
            \"livello\": 2,
            \"ultimo_livello\": 0,
            \"parent\": \"11000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"11010100\",
            \"text\": \"Impianti, apparecchiature e tecnologie nell'ambito delle biotecnologie applicate all'ambiente\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"11010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"11010200\",
            \"text\": \"Biotecnologie applicate ad acqua, suolo, rifiuti, aria, riciclo\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"11010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"11010300\",
            \"text\": \"Servizi nell'ambito delle biotecnologie applicate all'ambiente\",
            \"livello\": 3,
            \"ultimo_livello\": 1,
            \"parent\": \"11010000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"11020000\",
            \"text\": \"BioAlimentare\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"11000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"11030000\",
            \"text\": \"BioMedicale\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"11000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"12000000\",
            \"text\": \"Nanotecnologie\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"13000000\",
            \"text\": \"Gas e energie alternative\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"14000000\",
            \"text\": \"Petrolio e derivati\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"15000000\",
            \"text\": \"Turismo\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"17000000\",
            \"text\": \"E-commerce\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"18000000\",
            \"text\": \"Non catalogabile merceologicamente\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"19000000\",
            \"text\": \"Intersettoriale\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"20000000\",
            \"text\": \"Subfornitura\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"21000000\",
            \"text\": \"Contract\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"22000000\",
            \"text\": \"EDILIZIA: Lavori e costruzioni\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"23000000\",
            \"text\": \"INFRASRUTTURE\",
            \"livello\": 1,
            \"ultimo_livello\": 1,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"24000000\",
            \"text\": \"PRIVATE LABEL\",
            \"livello\": 1,
            \"ultimo_livello\": 0,
            \"parent\": \" \",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"24010000\",
            \"text\": \"PRIVATE LABEL - FOOD\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"24000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        },
        {
            \"id\": \"24020000\",
            \"text\": \"PRIVATE LABEL - NO FOOD\",
            \"livello\": 2,
            \"ultimo_livello\": 1,
            \"parent\": \"24000000\",
            \"inclusione\": \" \",
            \"esclusione\": \" \"
        }
    ]}";
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 08/08/2018
 * Time: 08:52 PM
 */

namespace LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

# imports the Google Cloud client library
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class NotasController extends Controller
{
    /**
     * @Route("/subirnotas")
     */
    public function dashboardAction(Request $request)
    {

        //echo $_GET['subject'];

        //echo __DIR__.'\..\..\..\Images\notas.png';
        //$file = $form['attachment']->getData();
        //$file->move($directory, $someNewFilename);

        # instantiates a client
        $imageAnnotator = new ImageAnnotatorClient();
        # the name of the image file to annotate
        $fileName = __DIR__ . '\..\..\..\web\assets\images\nota2.png';

        # prepare the image to be annotated
        $image = file_get_contents($fileName);

        $response = $imageAnnotator->textDetection($image);
        $texts = $response->getTextAnnotations();

        //printf('%d texts found:' . PHP_EOL, count($texts));

        $courses = array("3A0014", "8B0135", "7C0080", "7B0192", "7A0559", "3B0111", "3B0166", "8F0123", "8E0039", "8E0035", "8B0073", "5B0110");

        $i = 0;
        $array2 = array();
        $count = 0;
        $fullword = "";
        $code = "";
        $lastword = "";
        $word = "";
        $array1 = array();

        foreach ($texts as $text) {

            $lastword = $word;
            $word = $text->getDescription();

            $j = 0;
            $found = 0;
            foreach ($courses as $course) {
                //if (strstr($string, $url)) { // mine version
                //var_dump($course[0]. $word);
                if (strcmp($course, $word) == 0) { // Yoshi version
                    //var_dump($word);
                    $found = 1;
                    break;
                }
                $j = $j + 1;
            }

            //var_dump($word);

            if($found){
                $code = $word;
                $array1[] = $code;
            }
            else{
                //if($code != ""){

                    //var_dump("word");
                    //var_dump($word);
                    if(is_numeric($lastword) && strlen($lastword) < 3 && is_numeric($word[0]) && is_numeric($word[1])){


                        $array2[] = $word[0].$word[1];

                    }
                //}
            }

        }


        $imageAnnotator->close();

        # performs label detection on the image file
        //$response = $imageAnnotator->labelDetection($image);
        //$text = $imageAnnotator-
        //$text = $imageAnnotator->documentTextDetection($image)->getTextAnnotations();
        //var_dump($text);
        //$labels = $response->getFullTextAnnotation();
        //echo($labels);
        //var_dump($response->getTextAnnotations());
        //$labels = $response->getLabelAnnotations();

        /*$repository = $this->getDoctrine()->getRepository(Contact::class);
        $contacts = $repository->findBy(
            array('user' => $this->getUser())
        );*/
        //$array = array( array("3.0", "GESTION DE CONOCIMIENTO", "14"), array("1.0", "DEPORTE Y RECREACIÓN", "16"), array("3.0", "DESARROLLO DE TESIS", "12"), array("3.0", "SISTEMAS DISTRIBUIDOS", "15"), array("2.0", "DERECHO INFORMATICO", "17"), array("3.0", "AUDITORIA Y CONTROL DE TECNOLOGÍA INFORMÁTICA", "13"), array("3.0", "CALIDAD Y PRUEBA DE SOFTWARE", "14"), array("3.0", "ARQUITECTURA EMPRESARIAL", "14"));

        $Courses = array();
        for($i = 0; $i < count($array2); $i++){
            $Course = array();
            $Course[] = $i + 1;
            $Course[] = $array1[$i];
            $Course[] = 0;

            //var_dump($array1[$i]);
            //var_dump($array2[$i]);
            $Course[] = $array2[$i];
            $Courses[] = $Course;
        }

        // replace this example code with whatever you need
        return $this->render('default/subirnotas.html.twig',
            array("courses" => $Courses, "username" => "Isabel"/*$this->getUser()->getUsername()*/));
    }
}
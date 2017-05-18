<?php
namespace Controller;
use Library\Controller;
use Model\Form\FeedbackForm;
use Model\FeedbackRepository;
use Model\Entity\Feedback;
use Library\Request;
use Library\Session;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('index.phtml');
    }
    
    public function feedbackAction(Request $request)
    {
        $form = new FeedbackForm($request);
        
        if ($request->isPost()) {
            if ($form->isValid()) {
                $repository = $this->get('repository')->getRepository('feedback_page');
                $feedback = (new Feedback())->setFromForm($form);
                
                $repository->save($feedback);
                
                Session::setFlash('Feedback sent');
                $this->get('router')->redirectToRoute('/feedback');
            }
            
            Session::setFlash('Fill the fields properly');
        }
        
        return $this->render('feedback.phtml', ['form' => $form]);
    }
}
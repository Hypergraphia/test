import UIKit

class ResultViewController: UIViewController
{
    
    //結果画面のラベル
    @IBOutlet weak var result: UILabel!
    
    override func viewDidLoad()
    {
        super.viewDidLoad()
    }
    
    //segue前のViewControllerから値を取ってくる
    override func viewDidAppear(_ animated: Bool)
    {
        let samplepoint = (presentingViewController as? QuizViewController)?.points

        //取って来た値によって結果を変化
        switch samplepoint
        {

         case 1: result.text = "10%"
         case 2: result.text = "20%"
         case 3: result.text = "30%"
         case 4: result.text = "40%"
         case 5: result.text = "50%"
         case 6: result.text = "60%"
         case 7: result.text = "70%"
         case 8: result.text = "80%"
         case 9: result.text = "90%"
        case 10: result.text = "100%"
        default: result.text = "0%"
        }
    }
}

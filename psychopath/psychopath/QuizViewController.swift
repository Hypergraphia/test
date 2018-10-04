import UIKit

class QuizViewController: UIViewController
{
    //問題文
    let question = ["家に強盗がやってきた。あなたは武器を持っておらず、隠れる事しかできない。あなたが身を隠すとしたら家のどこ？",
                    "あなたはAさんに恋をしました。しかしAさんにはBという恋人が居ました。あなたはどうしますか？",
                    "あなたを影から見ているヒトがいる。そのヒトは何歳？",
                    "あなたは囚人だったが、刑期を終え、社会に出た。まず何をする？",
                    "あなたの前に戦時中で怪我をした軍人の肖像画がある。どこに怪我をしている？",
                    "あなたと友人は無人島で遭難した。持ち物はパン一切れとサバイバルナイフ。周りには木と石のみ。食料をどうする？",
                    "あなたは一面木で囲まれた深い山奥にいる。目の前にはちょっと休憩スペースがあるが、その後ろを何かがざっと過ぎ去った。果たしてそれは何か？",
                    "あなたには恋人がいる。しかし、その人は大量殺人鬼だった。『殺される前に殺す』か、『殺されるまで待つ』しか選択肢がないものとする。あなたはどちらを選ぶ？",
                    "あなたは小さい頃から両親に”この扉だけは絶対に開けるな”と言われていました。しかし好奇心に負けて、扉を開けてしまいました。さて、そこには何があったと思いますか?",
                    "世界から色が消えて白黒の世界になりました。一色だけ好きな色を加えれるとしたら何色？"]
    let answers = [["ドアの裏","押し入れ","物置き"], ["Aさんを殺す","Bさんを殺す","自殺する"], ["同い年","年下","年上"], ["家を探す","仕事を探す","家族に会う"], ["胸","足","頭"], ["友人にあげる","独り占めする","半分に分ける"], ["人","動物","落ち葉"], ["殺される前に殺す","殺されるまで待つ","選べない"], ["外","死体","貴重品"], ["赤色","青色","黄色"]]
    
    //variabless(変数)を定義
    var currentQuestion = 0
    var rightAnswerPlacement:UInt32 = 0
    var points = 0;
    
    //textView
    @IBOutlet weak var textview: UITextView!
    
    //button
    @IBAction func action(_ sender: AnyObject)
    {
        if (sender.tag == Int(rightAnswerPlacement))
        {

            points += 1
        }
        
        if (currentQuestion != question.count)
        {

            newQuestion()
        } else {

            //次の問題がなければ画面を遷移
            performSegue(withIdentifier: "showScore", sender: self.points)
        }
    }
        
    override func viewDidAppear(_ animated: Bool)
    {

        newQuestion()
    }
    
    //新しい問題を出題
    func newQuestion()
    {

        textview.text = question[currentQuestion]
        rightAnswerPlacement = arc4random_uniform(3)+1
        
        //新しい答えを作成
        var button:UIButton = UIButton()
        var x = 1
        
        for i in 1...3
        {

            //create a button
            button = view.viewWithTag(i) as! UIButton
            
            if (i == Int(rightAnswerPlacement))
            {

                button.setTitle(answers[currentQuestion][0], for: .normal)
            } else {

                button.setTitle(answers[currentQuestion][x], for: .normal)
                x = 2
            }
        }

        currentQuestion += 1
    }

    override func viewDidLoad() {
        super.viewDidLoad()
    }
}


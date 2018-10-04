//
//  ResultViewController.swift
//  psychopath
//
//  Created by 新井達朗 on 2018/10/01.
//  Copyright © 2018年 新井達朗. All rights reserved.
//

import UIKit

class ResultViewController: UIViewController {
    
    let points = Int.random(in:1...10)
    
    @IBOutlet weak var result: UILabel!
    
    override func viewDidLoad() {
        super.viewDidLoad()
    }
    
    //segue前のViewControllerから値を取ってくる
    override func viewDidAppear(_ animated: Bool) {
        let samplepoint = (presentingViewController as? QuizViewController)?.points
        
        switch samplepoint {
        case 1:
            result.text = "10%です"
        case 2:
            result.text = "20%です"
        case 3:
            result.text = "30%です"
        case 4:
            result.text = "40%です"
        case 5:
            result.text = "50%です"
        case 6:
            result.text = "60%です"
        case 7:
            result.text = "70%です"
        case 8:
            result.text = "80%です"
        case 9:
            result.text = "90%です"
        case 10:
            result.text = "100%です"
        default:
            result.text = "0%です"
        }
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destination.
        // Pass the selected object to the new view controller.
    }
    */

}

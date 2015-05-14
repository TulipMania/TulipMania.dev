<?php 

class ScenarioSeeder extends Seeder {

	public function run()
	{
			$scenario1                = new Scenario();
			$scenario1->body          = "Valkenswaard, Low Countries\n
                                        January 9, 1629\n
									    Groundskeeper Hennie says: \"Good news, characterName! Your mean great uncle, Rinus, died of bloody flux and left his tulip field to you! 
									    \"As you know, tulips are of great value in this land. Grow good tulips and we --ahem, I mean, you-- could become a very rich man.
									    \"I am at your service. Shall we go shopping?\"";
			$scenario1->header        = "Welcome!";
			$scenario1->locations     = "intro";
			$scenario1->leads_to      = "e";
			$scenario1->scene_id      = "s_intro";
			$scenario1->save();

			$scenario2                = new Scenario();
			$scenario2->body          = "What would would you like to do today?";
			$scenario2->header     	  = "";
			$scenario2->locations     = "grounds";
			$scenario2->leads_to      = "a_3,a_4";
			$scenario2->scene_id      = "s_grounds";
			$scenario2->save();

			$scenario3                = new Scenario();
			$scenario3->body          = "Arjen, the town drunk, bets you ƒ3.00 that he can beat you swimming across the river. 
										Hennie says: \"Be careful, master. Arjen, though a lush, is a magnificent swimmer. 
										Also, the water is very cold. On the other hand, those three guilders could buy some much needed seed.\"";
			$scenario3->header        = "Continue.";
			$scenario3->locations     = "grounds";
			$scenario3->leads_to      = "a_5,a_6,a_7";
			$scenario3->scene_id      = "s_arjen_intro";
			$scenario3->save();

			$scenario4                = new Scenario();
			$scenario4->body          = "You run into your old friend Bert van Praag from your days at the University 
										of Groningen. He and his wife are on their way to a party at Count 
										Kiesel's. Would you like to join them?\n
										Hennie says: \"Make sure to give the driver a ƒ1.50 gratuity. You don't want to 
										get a reputation for being a miser.\"";
			$scenario4->header        = "Continue.";
			$scenario4->locations     = "grounds";
			$scenario4->scene_id      = "s_bert_intro";
			$scenario4->leads_to      = "a_8,a_9";
			$scenario4->save();

			$scenario5                = new Scenario();
			$scenario5->body          = "You lose!
										Arjen says: \"Thank you, you fool. Time for some eau de vie!\"";
			$scenario5->header        = "Continue.";
			$scenario5->locations     = "grounds";
			$scenario5->scene_id      = "s_arjen_wins";
			$scenario5->leads_to      = "e";
			$scenario5->save();

			$scenario6                = new Scenario();
			$scenario6->body          = "You win! \n
										Hennie says: \"Congratulations, master. I'll make sure Mr. Arjen 
										leaves the grounds and pays what he owes you.\"";
			$scenario6->header        = "Swim.";
			$scenario6->locations     = "grounds";
			$scenario6->scene_id      = "s_arjen_you_win";
			$scenario6->leads_to      = "e";
			$scenario6->save();

			$scenario7                = new Scenario();
			$scenario7->body          = "Arjen drowned! You lose a day fishing his body out of the river. 
										(But you get his ƒ3.00!)";
			$scenario7->header        = "Swim.";
			$scenario7->locations     = "grounds";	
			$scenario7->scene_id      = "s_arjen_dies";						
			$scenario7->leads_to      = "e";
			$scenario7->save();

			$scenario8                = new Scenario();
			$scenario8->body          = "The countess has taken a liking to you. She asks if you 		
										would like to pair up with her for a short minuet. From across 		
										the room the count gives you a look. He is not happy.\n  
										Would you like to dance with her?";
			$scenario8->header        = "Continue.";
			$scenario8->locations     = "grounds";							
			$scenario6->scene_id      = "s_countess_intro";
			$scenario8->leads_to      = "a_10,a_11";
			$scenario8->save();

			$scenario9                = new Scenario();
			$scenario9->body          = "A man at the party by the name of Djavan says he's a childhood 
										friend of yours from Den Burg. You don't recognize him, but he seems nice.";
			$scenario9->header        = "Djavan Intro";
			$scenario9->locations     = "grounds";							
			$scenario9->scene_id      = "s_djavan_intro";
			$scenario9->leads_to      = "a_12,a_13,a_14,a_15";
			$scenario9->save();

			$scenario10                = new Scenario();
			$scenario10->body          = "Oh no! Count Kiesel has challenged you to a duel! If you accept you can get 
										  seriously hurt... or even DIE! But if you decline, your reputation will suffer 
										  and you will lose upwards of ƒ9.00 in sales. (No one wants to buy tulips from a coward!)";
			$scenario10->header        =  "Continue.";
			$scenario10->locations     = "grounds";							
			$scenario10->scene_id      = "s_kiessel_duel";
			$scenario10->leads_to      = "a_16,a_17,a_18";
			$scenario10->save();

			$scenario11                = new Scenario();
			$scenario11->body          = "The Count winks at you! He respects a man who will dance with the Countess. You gain a 
										  reputation for being a courageous man. People want to do business with you. You have an 
										  extra ƒ5.90.";
			$scenario11->header        =  "Continue.";						
			$scenario11->scene_id      = "s_count_wink";
			$scenario11->leads_to      = "e";
			$scenario11->save();

			$scenario12                = new Scenario();
			$scenario12->body          = "In a great opium dream you stumble into the drawing room and win ƒ12.00 at the poker 
										  table while speaking in tongues.";
			$scenario12->header        = "Continue.";
			$scenario12->locations     = "grounds";							
			$scenario12->scene_id      = "s_opium_poker";
			$scenario12->leads_to      = "e";
			$scenario12->save();

			$scenario13                = new Scenario();
			$scenario13->body          = "Oh no! You had a very interesting opium dream in which you vomited birds of all sorts...
										  but you also lost your wallet with ƒ5.00 inside.";							
			$scenario3->header         = "Continue.";
			$scenario13->locations     = "grounds";
			$scenario13->scene_id      = "s_opium_wallet";
			$scenario13->leads_to      = "e";
			$scenario13->save();

			$scenario14                = new Scenario();
			$scenario14->body          = "Djavan was actually a con artist! While you're in the middle of an opium dream about 
										  flying giant beetles, he steals ƒ8.00 from your pocket.";							
			$scenario3->header         = "Continue.";
			$scenario14->locations     = "grounds";
			$scenario14->scene_id      = "s_djavan_con";
			$scenario14->leads_to      = "e";
			$scenario14->save();

			$scenario15                = new Scenario();
			$scenario15->body          = "During an opium dream about Rinus you finally remember who Djavan is! You two hit it off 
										  and you even manage to sell him ƒ8.00 worth of tulips.";
			$scenario15->header         = "Continue.";
			$scenario15->locations     = "grounds";
			$scenario15->scene_id      = "s_opium_tulips";
			$scenario15->leads_to      = "e";
			$scenario15->save();

			$scenario16                = new Scenario();
			$scenario16->body          = "The Count has shot you in the knee! You lose 
										  three days of rest and ƒ12.30 in medical fees.";
			$scenario16->header         = "Continue.";
			$scenario16->locations     = "grounds";
			$scenario16->scene_id      = "s_count_shot_knee";
			$scenario16->leads_to      = "e";
			$scenario16->save();

			$scenario17                = new Scenario();
			$scenario17->body          = "The Count shot you in the face! The countess 
										  gives you mouth to mouth but, alas, you are dead.";
			$scenario17->header        = "Continue.";
			$scenario17->locations     = "grounds";
			$scenario17->scene_id      = "s_player_dead";
			$scenario17->leads_to      = "e";
			$scenario17->save();

			$scenario18                = new Scenario();
			$scenario18->body          = "Congratulations! You have killed the count!";
			$scenario18->header         = "Continue.";
			$scenario18->locations     = "grounds";
			$scenario18->scene_id      = "s_count_dead";
			$scenario18->leads_to      = "e";
			$scenario18->save();





	}
}


 ?>
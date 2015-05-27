<?php 

class ScenariosSeeder extends Seeder {

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
			$scenario1->leads_to      = "s_grounds";
			$scenario1->story_id      = "s_intro";
			$scenario1->save();

			$scenario2                = new Scenario();
			$scenario2->body          = "What would would you like to do today?";
			$scenario2->header     	  = "Walk the grounds!";
			$scenario2->locations     = "grounds";
			$scenario2->leads_to      = "a_3";
			$scenario2->story_id      = "s_grounds";
			$scenario2->save();

			$scenario3                = new Scenario();
			$scenario3->body          = "Arjen, the town drunk, bets you ƒ3.00 that he can beat you swimming across the river. 
										Hennie says: \"Be careful, master. Arjen, though a lush, is a magnificent swimmer. 
										Also, the water is very cold. \"";
			$scenario3->header        = "Continue.";
			$scenario3->locations     = "grounds";
			$scenario3->leads_to      = "sa_6";
			$scenario3->story_id      = "a_3";
			$scenario3->save();

			$scenario4                = new Scenario();
			$scenario4->body          = "You run into your old friend Bert van Praag from your days at the University 
										of Groningen. He and his wife are on their way to a party at Count 
										Kiesel's. You join them.\n
										Hennie says: \"Make sure to give the driver a ƒ1 gratuity. You don't want to 
										get a reputation for being a miser.\"";
			$scenario4->header        = "Continue.";
			$scenario4->locations     = "grounds";
			$scenario4->story_id      = "ad_4";
			$scenario4->leads_to      = "a_9";
			$scenario4->money 		  = 1;
			$scenario4->save();

			$scenario5                = new Scenario();
			$scenario5->body          = "You lose!
										Arjen says: \"Thank you, you fool. Time for some eau de vie!\"";
			$scenario5->header        = "Continue.";
			$scenario5->locations     = "grounds";
			$scenario5->story_id      = "sa_5";
			$scenario5->leads_to      = "e";
			$scenario5->save();

			$scenario6                = new Scenario();
			$scenario6->body          = "You win! \n
										Hennie says: \"Congratulations, master. I'll make sure Mr. Arjen 
										leaves the grounds and pays what he owes you.\"";
			$scenario6->header        = "Continue.";
			$scenario6->locations     = "grounds";
			$scenario6->story_id      = "sa_6";
			$scenario6->leads_to      = "e";
			$scenario6->save();

			$scenario7                = new Scenario();
			$scenario7->body          = "Arjen drowned! You lose a day fishing his body out of the river. 
										(But you get his ƒ3!)";
			$scenario7->header        = "Continue.";
			$scenario7->locations     = "grounds";	
			$scenario7->story_id      = "ai_7";		
			$scenario7->money 		  = 3;				
			$scenario7->leads_to      = "e";
			$scenario7->save();

			$scenario8                = new Scenario();
			$scenario8->body          = "The countess has taken a liking to you. She asks if you 		
										would like to pair up with her for a short minuet. From across 		
										the room the count gives you a look. He is not happy.\n  
										You decide to dance with her.";
			$scenario8->header        = "Continue.";
			$scenario8->locations     = "grounds";							
			$scenario8->story_id      = "a_8";
			$scenario8->leads_to      = "a_10,ai_11";
			$scenario8->save();

			$scenario9                = new Scenario();
			$scenario9->body          = "A man at the party by the name of Djavan says he's a childhood 
										friend of yours from Den Burg. You don't recognize him, but he seems nice.";
			$scenario9->header        = "Continue.";
			$scenario9->locations     = "grounds";							
			$scenario9->story_id      = "a_9";
			$scenario9->leads_to      = "ai_12";
			$scenario9->save();

			$scenario10                = new Scenario();
			$scenario10->body          = "Oh no! Count Kiesel has challenged you to a duel! If you accept you can get 
										  seriously hurt... or even DIE! But if you decline, your reputation will suffer 
										  and you will lose upwards of ƒ9 in sales. (No one wants to buy tulips from a coward!)";
			$scenario10->header        =  "Continue.";
			$scenario10->locations     = "grounds";							
			$scenario10->story_id      = "a_10";
			$scenario10->leads_to      = "ad_16,a_17,a_18";
			$scenario10->save();

			$scenario11                = new Scenario();
			$scenario11->body          = "The Count winks at you! He respects a man who will dance with the Countess. You gain a 
										  reputation for being a courageous man. People want to do business with you. You have an 
										  extra ƒ5.";
			$scenario11->header        =  "Continue.";
			$scenario11->locations     = 'grounds';						
			$scenario11->story_id      = "ai_11";
			$scenario11->leads_to      = "e";
			$scenario11->money 		   = 5;
			$scenario11->save();

			$scenario12                = new Scenario();
			$scenario12->body          = "In a great opium dream you stumble into the drawing room and win ƒ12 at the poker 
										  table while speaking in tongues.";
			$scenario12->header        = "Continue.";
			$scenario12->locations     = "grounds";							
			$scenario12->story_id      = "ai_12";
			$scenario12->leads_to      = "e";
			$scenario12->money 		   = 12;
			$scenario12->save();

			$scenario13                = new Scenario();
			$scenario13->body          = "Oh no! You had a very interesting opium dream in which you vomited birds of all sorts...
										  but you also lost your wallet with ƒ5 inside.";							
			$scenario13->header         = "Continue.";
			$scenario13->locations     = "grounds";
			$scenario13->story_id      = "ad_13";
			$scenario13->leads_to      = "e";
			$scenario13->money 		   = 5; 
			$scenario13->save();

			$scenario14                = new Scenario();
			$scenario14->body          = "Djavan was actually a con artist! While you're in the middle of an opium dream about 
										  flying giant beetles, he steals ƒ8 from your pocket.";							
			$scenario14->header         = "Continue.";
			$scenario14->locations     = "grounds";
			$scenario14->story_id      = "ad_14";
			$scenario14->leads_to      = "e";
			$scenario14->money 		   = 8;
			$scenario14->save();

			$scenario15                = new Scenario();
			$scenario15->body          = "During an opium dream about Rinus you finally remember who Djavan is! You two hit it off 
										  and you even manage to sell him ƒ8 worth of tulips.";
			$scenario15->header         = "Continue.";
			$scenario15->locations     = "grounds";
			$scenario15->story_id      = "ai_15";
			$scenario15->leads_to      = "e";
			$scenario15->money 		   = 8;
			$scenario15->save();

			$scenario16                = new Scenario();
			$scenario16->body          = "The Count has shot you in the knee! You lose 
										  three days of rest and ƒ12 in medical fees.";
			$scenario16->header         = "Continue.";
			$scenario16->locations     = "grounds";
			$scenario16->story_id      = "ad_16";
			$scenario16->leads_to      = "e";
			$scenario16->money 		   = 12;
			$scenario16->save();



			$scenario17                = new Scenario();
			$scenario17->body          = "The Count shot you in the face! The countess 
										  gives you mouth to mouth but, alas, you are dead.";
			$scenario17->header        = "Continue.";
			$scenario17->locations     = "grounds";
			$scenario17->story_id      = "a_17";
			$scenario17->leads_to      = "e";
			$scenario17->save();

			$scenario18                = new Scenario();
			$scenario18->body          = "Congratulations! You have killed the count!";
			$scenario18->header         = "Continue.";
			$scenario18->locations     = "grounds";
			$scenario18->story_id      = "a_18";
			$scenario18->leads_to      = "e";
			$scenario18->save();


			$scenario19                = new Scenario();
			$scenario19->body          = "You come across a cave that looks oh so much like one in which you used to play as a child. You decide to go in. A bear!\n 
										  You decide to engage it. \n
									      Hennie says: \"I will meet you back at the house, master.\"";
			$scenario19->header        = "Continue.";
			$scenario19->locations     = "grounds";
			$scenario19->story_id      = "a_19";
			$scenario19->leads_to      = "ad_20,ai_21,a_22,ad_23";
			$scenario19->save();			

			$scenario20                = new Scenario();
			$scenario20->body          = "You fool! This bear cannot be tamed. \n
										  You lose two fingers and ƒ11 in medical fees.";
			$scenario20->header        = "Continue.";
			$scenario20->locations     = "grounds";
			$scenario20->story_id      = "ad_20";
			$scenario20->leads_to      = "e";
			$scenario20->money 		   = 11.00;
			$scenario20->save();

			$scenario21                = new Scenario();
			$scenario21->body          = "Those morning push-ups have paid off! \n
										  You kill the bear and sell its skin for ƒ14.";
			$scenario21->header        = "Continue.";
			$scenario21->locations     = "grounds";
			$scenario21->story_id      = "ai_21";
			$scenario21->leads_to      = "e";
			$scenario21->money 		   = 14.00;
			$scenario21->save();

			$scenario22                = new Scenario();
			$scenario22->body          = "You sing the bear a lullaby and it goes to sleep. \n 
										  You walk out silently.";
			$scenario22->header        = "Continue.";
			$scenario22->locations     = "grounds";
			$scenario22->story_id      = "a_22";
			$scenario22->leads_to      = "e";
			$scenario22->save();

			$scenario23                = new Scenario();
			$scenario23->body          = "You are able to land a few punches, but the bear bit your ear off! \n 
										  Spend ƒ12 in medical fees.";
			$scenario23->header        = "Continue.";
			$scenario23->locations     = "grounds";
			$scenario23->story_id      = "ad_23";
			$scenario23->leads_to      = "e";
			$scenario23->money 		   = 12.00;
			$scenario23->save();






	}
}


 ?>
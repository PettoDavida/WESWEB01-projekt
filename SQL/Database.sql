DROP DATABASE Apex;
CREATE DATABASE Apex;
USE Apex;

CREATE TABLE Lore(
id int(8) PRIMARY KEY, 
title varchar(32), 
content varchar(8000)
);

CREATE TABLE Passive(
id int(8) PRIMARY KEY, 
name varchar(32), 
description varchar(128)
);

CREATE TABLE Tactical(
id int(8) PRIMARY KEY, 
name varchar(32), 
description varchar(128)
);

CREATE TABLE Ultimate(
id int(8) PRIMARY KEY, 
name varchar(32), 
description varchar(128)
);

CREATE TABLE Weapon(
id int(8) PRIMARY KEY AUTO_INCREMENT, 
name varchar(32), 
type varchar(32), 
bullets varchar(32), 
damage int(8),
firerate int(8)
);

CREATE TABLE User(
id int(8) PRIMARY KEY AUTO_INCREMENT,
username varchar(32),
email varchar(32),
password varchar(60)
);

CREATE TABLE worldchat(
id int(8) PRIMARY KEY AUTO_INCREMENT,
userid int(8),
message varchar(128),
sent timestamp default CURRENT_TIMESTAMP,
FOREIGN KEY(userid) REFERENCES user(id)
);

CREATE TABLE Legend(
id int(8) PRIMARY KEY, 
name varchar(32), 
role varchar(32), 
passive int(8),
tactical int(8),
ultimate int(8),
lore int(8),
FOREIGN KEY(lore) REFERENCES  Lore(id),
FOREIGN KEY(passive) REFERENCES  Passive(id),
FOREIGN KEY(tactical) REFERENCES  Tactical(id),  
FOREIGN KEY(ultimate) REFERENCES  Ultimate(id)
);

CREATE TABLE Favoritelegend(
user_id int(8),
legend_id int(8),
FOREIGN KEY(user_id) REFERENCES User(id),
FOREIGN KEY(legend_id) REFERENCES Legend(id)
);

CREATE TABLE Favoriteweapon(
user_id int(8),
weapon_id int(8),
FOREIGN KEY(user_id) REFERENCES  User(id),
FOREIGN KEY(weapon_id) REFERENCES  Weapon(id)
);

INSERT INTO Lore(id, title, content) VALUES (1, "Professional Soldier", "Born into a military family where she, her parents, and her four older brothers all served in the IMC Armed Forces, Bangalore has been an exceptional soldier since she was young. She was top of her class at the IMC Military Academy and the only cadet who could take apart a Peacekeeper, equip it with a Precision Choke hop-up, and put it back together in under twenty seconds – blindfolded.

Three years ago, Anita and her brother Jackson were ordered to retrieve a mercenary fleet from the Outlands to aid in the IMC’s fight against the Militia. However, their unit lost contact with IMC HQ and were ambushed on arrival. The squad scattered, but Jackson stayed behind to give his sister time to escape. Alone and with no way home, Anita put her training, extensive weapon knowledge, and competitive spirit to work by joining the Apex Games. Now, she fights to raise money for passage back to the IMC home base, where she hopes to reunite with what remains of her family.");
INSERT INTO Lore(id, title, content) VALUES (2, "Technological Tracker", "Bloodhound is known across the Outlands as one of the greatest game hunters the Frontier has ever seen – and that’s about all anyone knows. Their identity is a mystery wrapped in layers of rumors: they are fabulously wealthy, a bloodthirsty murderer, a Goliath whisperer, a former slave, half bat, and a dozen other things depending on who’s doing the whispering.

All anyone truly knows is that Bloodhound is a force to be reckoned with in the Apex Games. Bloodhound’s unparalleled tracking skills are a boon to any team they join, helping them root out hidden opponents and tracking the enemy’s movements. Calling on Earth’s Old Norse Gods to guide them, Bloodhound believes that destiny is a path that has already been laid out, eventually carrying all to their death. But with that knowledge comes strength, because until that day comes, Bloodhound knows they can’t be stopped.");
INSERT INTO Lore(id, title, content) VALUES (3, "Toxic Trapper", "Before there was Caustic, a scientist named Alexander Nox worked at Humbert Labs, the Frontier’s leading manufacturer of pesticide gases. With a glut of pesticides needed to protect the growing Frontier colonies’ crops, Humbert Labs was constantly on the hunt for better and stronger formulas. Nox was one of their brightest scientists and worked day and night developing new gases. But to make sure they worked, he needed to test them on more than just inert tissue: he needed something living.

As he toiled in secret, Nox began to see the beauty in his creations and their ability to destroy anything they touched. But the head of Humbert Labs soon discovered his gruesome experiments, and their confrontation ended with the lab in flames and its chief dead. Today, Nox is missing and presumed deceased. Caustic, meanwhile, now finds new test subjects in the Apex Games, where he puts his gaseous creations to work and observes their effects with great interest.");
INSERT INTO Lore(id, title, content) VALUES (4, "Shielded Fortress", "Gibraltar is a gentle giant with a wild side. The son of two SARAS (Search and Rescue Association of Solace) volunteers, he has always been skilled at getting others out of dangerous situations that are common in the Outlands. However, he only began to understand the value of protecting others when he and his boyfriend stole his father’s motorcycle, took it on a joyride, and got trapped by a deadly mudslide. His parents saved them, and his father lost an arm in the process. Gibraltar has never forgotten that sacrifice and has devoted his life to helping those in need.

The Apex Games didn’t change that, but they changed what it meant. Many of Gibraltar’s friends and colleagues have competed in the Games for extra money, fame, and glory over the years, and some never came home. Gibraltar joined to keep them safe and, for the first time, his skills as a rescuer and his rebellious nature worked together. He’s now become an icon in the Apex Games, putting himself in the line of fire to protect his squad and send his opponents running for cover.");
INSERT INTO Lore(id, title, content) VALUES (5, "Combat Medic", "Ajay Che, aka Lifeline, isn’t someone you would expect to find in the Apex Games. Once the child of wealthy war profiteers, she left home when she learned of the damage her family had caused and enlisted in the Frontier Corps, a humanitarian organization that aids Frontier communities in need. She’s since devoted her life to helping others and joined the Apex Games to fund the Frontier Corps with her winnings.

Since no one in the Games is innocent — they all know what they signed up for — and every one of her victories means help for those in need, Lifeline has no problem engaging in the popular bloodsport. Or so she tells herself. She may seem sarcastic and callous, but deep down she wants to help people and make the world a better place. If that means taking a few people down in the process, so be it.");
INSERT INTO Lore(id, title, content) VALUES (6, "Holographic Trickster", "Mirage is the kind of guy who likes to stand out. The youngest of four brothers, he perfected the art of fooling around to get attention. The one thing he took seriously was Holo-Pilot technology: introduced to the illusion-creating tech by his engineer mother, he poured over the mechanisms and learned all he could about them. Even when his brothers went MIA during the Frontier War, Mirage and his mother continued to develop holo devices, and the work brought them closer.

While working as a bartender to make ends meet, Mirage heard amazing stories from his patrons about the Apex Games and the wealth and glory that came with victory. As good as both of those sounded, he knew he couldn’t risk leaving his mother childless – until she gave him a set of customized holo devices and told him to follow his dream. Mirage is now the life of the Apex Games, outwitting opponents and charming audiences across the Outlands.");
INSERT INTO Lore(id, title, content) VALUES (7, "The Adrenaline Junkie", "One day, Octavio Silva was bored. In fact, he was bored most days. Heir to the preoccupied CEOs of Silva Pharmaceuticals and wanting for nothing in life, he entertained himself by performing death-defying stunts and posting holovids of them for his fans to gawk over. So, this day, he decided to set the course record for a nearby Gauntlet by launching himself across the finish line – using a grenade.

As he lay in triage hours later, the doctors informed him that the damage done to his legs meant his daredevil days were over. That didn’t sit well with Octavio, who turned to an old friend for help: Ajay Che, who he guilted into forging an order to replace his legs with bionic ones. Suddenly able to repair his limbs at a moment’s notice, Octavio decided petty online stunts weren’t enough: the ultimate adrenaline rush, the Apex Games, was calling. Now, he’s going to become an Apex Champion doing the most incredible, death-defying moves anyone’s ever seen. Maybe in the arena, he won’t be so bored");
INSERT INTO Lore(id, title, content) VALUES (8, "Forward Scout", "Pathfinder is the picture of optimism, despite his circumstances. A MRVN (Mobile Robotic Versatile eNtity) modified to specialize in location scouting and surveying, he booted up decades ago in an abandoned laboratory with no idea who created him or why. With only his MRVN designation to hint at his identity, Pathfinder set off in search of his creator.

Pathfinder has learned much in his travels since then (like how to make a mean Eastern Leviathan Stew) but hasn’t come any closer to finding his creator. Still, he’s never given up hope, and has joined the Apex Games to gain a following--and hopefully draw the attention of his maker. In the meantime, he remains enthusiastic and helpful, always ready to make new friends (then shoot them).");
INSERT INTO Lore(id, title, content) VALUES (9, "Interdimensional Skirmisher", "Wraith is a whirlwind fighter, able to execute swift and deadly attacks and manipulate spacetime by opening rifts in the fabric of reality — but she has no idea how she got that way. Years ago, she woke up in an IMC Detention Facility for the Mentally Ill with no memory of her life before. She also began hearing a distant voice whispering in her mind that would keep her awake for days on end. Despite nearly driving her insane, once she started to listen and trust it, the voice helped her harness her newfound power of void manipulation and escape the facility.

Determined to uncover her true identity, Wraith began a quest to find out more about the experiments. Many of the old research facilities, however, are buried beneath heavily guarded arenas used for the Apex Games. Now Wraith has joined the competition, and with every match she gets closer to the truth");

INSERT INTO Passive(id, name, description) VALUES (1, "Double Time", "Taking fire while sprinting makes you move faster for a brief time.");
INSERT INTO Passive(id, name, description) VALUES (2, "Tracker", "See tracks left behind by your foes.");
INSERT INTO Passive(id, name, description) VALUES (3, "Nox Vision", "Allows you to see enemies through your gas.");
INSERT INTO Passive(id, name, description) VALUES (4, "Gun Shield", "Aiming down sights deploys a gun shield that blocks incoming fire.");
INSERT INTO Passive(id, name, description) VALUES (5, "Combat Medic", "Revive knocked down teammates faster while protected by a shield wall. Healing items are used 25% faster.");
INSERT INTO Passive(id, name, description) VALUES (6, "Encore!", "Automatically drop a decoy and cloak for five seconds when knocked down.");
INSERT INTO Passive(id, name, description) VALUES (7, "Swift Mend", "Automatically restores health over time.");
INSERT INTO Passive(id, name, description) VALUES (8, "Insider Knowledge", "Scan a survey beacon to reveal the ring’s next location.");
INSERT INTO Passive(id, name, description) VALUES (9, "Voices from the Void", "A voice warns you when danger approaches. As far as you can tell, it’s on your side.");

INSERT INTO Tactical(id, name, description) VALUES (1, "Smoke Launcher", "Fire a high-velocity smoke canister that explodes into a smoke wall on impact.");
INSERT INTO Tactical(id, name, description) VALUES (2, "Eye of The AllFather", "Briefly reveal hidden enemies, traps, and clues throughout structures in front of you.");
INSERT INTO Tactical(id, name, description) VALUES (3, "Nox Gas Trap", "Drop canisters that release deadly Nox gas when shot or triggered by enemies.");
INSERT INTO Tactical(id, name, description) VALUES (4, "Dome of Protection", "Throw down a dome-shield that blocks attacks for 15 seconds.");
INSERT INTO Tactical(id, name, description) VALUES (5, "D.O.C. Heal Drone", "Call your Drone of Compassion to automatically heal nearby teammates over time.");
INSERT INTO Tactical(id, name, description) VALUES (6, "Psyche Out", "Send out a holographic decoy to confuse the enemy.");
INSERT INTO Tactical(id, name, description) VALUES (7, "Stim", "Move 30% faster for six seconds. Costs health to use.");
INSERT INTO Tactical(id, name, description) VALUES (8, "Grappling Hook", "Grapple to get to out-of-reach places quickly.");
INSERT INTO Tactical(id, name, description) VALUES (9, "Into the Void", "Reposition quickly through the safety of void space, avoiding all damage.");

INSERT INTO Ultimate(id, name, description) VALUES (1, "Rolling Thunder", "Call in an artillery strike that slowly creeps across the landscape."); 
INSERT INTO Ultimate(id, name, description) VALUES (2, "Beast of the Hunt", "Enhances your senses, allowing you move faster and highlighting your prey."); 
INSERT INTO Ultimate(id, name, description) VALUES (3, "Nox Gas Grenade", "Blankets a large area in Nox gas."); 
INSERT INTO Ultimate(id, name, description) VALUES (4, "Defensive Bombardment", "Call in a concentrated mortar strike on a marked position."); 
INSERT INTO Ultimate(id, name, description) VALUES (5, "Care Package", "Call in a drop pod full of high-quality defensive gear."); 
INSERT INTO Ultimate(id, name, description) VALUES (6, "Vanishing Act", "Deploy a team of Decoys to distract enemies while you cloak."); 
INSERT INTO Ultimate(id, name, description) VALUES (7, "Launch Pad", "Deploy a jump pad that catapults teammates through the air."); 
INSERT INTO Ultimate(id, name, description) VALUES (8, "Zipline Gun", "Create a zipline for everyone to use."); 
INSERT INTO Ultimate(id, name, description) VALUES (9, "Dimensional Rift", "Link two locations with portals for 60 seconds, allowing your entire team to use them.");

INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (1, "Bangalore", "Aggressor", 1, 1, 1, 1);
INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (2, "BloodHound", "Support", 2, 2, 2, 2);
INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (3, "Caustic", "Protector", 3, 3, 3, 3);
INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (4, "Gibraltar", "Protector", 4, 4, 4, 4);
INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (5, "Lifeline", "Support", 5, 5, 5, 5);
INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (6, "Mirage", "Aggressor", 6, 6, 6, 6);
INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (7, "Octane", "Aggressor", 7, 7, 7, 7);
INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (8, "Pathfinder", "Support", 8, 8, 8, 8);
INSERT INTO Legend(id, name, role, passive, tactical, ultimate, lore) VALUES (9, "Wraith", "Aggressor", 9, 9, 9, 9);

INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("R-99", "SubMachineGun", "Light", 12, 1080);
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Prowler", "SubMachineGun", "Heavy", 14, 797);
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Alternator", "SubMachineGun", "Light", 13, 641);
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("R-301", "AssaultRifle", "Light", 14, 797);
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Flatline" ,"AssaultRifle" ,"Heavy" ,16 , 600 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Hemlok" ,"AssaultRifle" ,"Heavy" ,18 , 480 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Havoc" ,"AssaultRifle" ,"Energy" ,18 , 437 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("G7 Scout" ,"Sniper" ,"Light" ,30 ,240 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Triple Take" ,"Sniper" ,"Energy" ,69 ,60 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Longbow" ,"Sniper" ,"Heavy" ,55 ,60 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Kraber" ,"Sniper" ,"Special" ,125 ,60 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Spitfire" ,"LightMachineGun" ,"Heavy" ,20 ,540 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Devotion" ,"LightMachineGun" ,"Energy" ,17 ,900 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Mastiff" ,"ShotGun" ,"Special" ,144 ,60 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Mozambique" ,"ShotGun" ,"Shells" ,45 ,180 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("EVA-8 AUTO" ,"ShotGun" ,"Shells" ,63 ,120 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Peacekeeper" ,"ShotGun" ,"Shells" ,110 ,60 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("P2020" ,"HandGun" ,"Light" ,12 ,420 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("Wingman" ,"HandGun" ,"Heavy" ,45 ,180 );
INSERT INTO Weapon(name, type, bullets, damage, firerate) VALUES ("RE-45" ,"HandGun" ,"Light" ,11 ,720 );

INSERT INTO user(username, email, password) VALUES ('123', '123@123.123', '$2y$10$15kqzCDQwGbD2pHQWBsgbejXQoqaYqMA9It3dxjgex2OCp9Hudc7q');
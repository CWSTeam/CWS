var health = 20;
//I don't know what I may do. Help would be appreciated.
var death = 0;
var commands = ["attack-Add Description","block-Add Description","run-Add Description","backpack-Open your list of items acquired on your journey", "equip-equip one of your items included in your backpacks"];
var backpack = ["Blunt Cleaver", "Shattered Dagger"]
var commandsList = function() {
console.log("commands")
}
//Add ability to use information(weapon) to find information on item. Make new variable for decriptions with array
/*
commandsList commands here:
*/
var attack = 0;
//Change to function
var block = 0;
//Change to function
var equip = function(itemInBackpack) {
/*If the item is in your backpack, you are able to equip them. Check the items in your backpack array, and compare using an if statement.*/
}
var describe = function(item) {
console.log(descriptions[1]) //Change number to weapon as number
}
var descriptions = ["A low quality sword crafted while traveling"]
//Add willHit percentage to descriptions.
var experience = 0

var slaying = 0;
var DamageToEnemy = 0;
var DamageToMe = 0;
var willHit = Math.floor(Math.random());
//Change willHit to different values.
//Make Different enemies deal more
//Make will hit depenend on weapon; More damage, less percentage
var enemyHealth = 0;
var myName = prompt("Alas traveler, your quest requires a name. Choose it wisely.")
console.log("During your adventures, use 'commandsList' to discover what you are able to do");
/*
Add ability to show completed missions.
Add experience points
*/
while (slaying === 0) {
//Define DamageToEnemy in beginning
//Fight Dragon
//Allow enemy to talk to you.
//Change DamageToMe depending on enemy.
DamageToEnemy = Math.floor(Math.random() * 5 + 1)
enemyHealth = 13
if (willHit = 0) {
health = health - DamageToMe
}

if (willHit = 1) {
enemyHealth = enemyHealth - DamageToEnemy ;
}

//Change health depending on enemy.
if (enemyHealth < 0) {
slaying = 1;
console.log("Congratulations, you have slayed the dragon.
//Add command to choose when to continue / Say command when prompted to continue
}

if (health < 0) {
console.log("You have lost. Do you wish to restart your journey?");
slaying = -1;
//Reset all variables, reload page
}

if (health < 10) {
console.log("Careful, your health is at ten");
}

}


/*
Exception: unterminated string literal
*/
/*
Exception: unterminated string literal
*/

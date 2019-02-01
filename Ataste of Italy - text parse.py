#read tutorial from youtube, author Dominque Thiebaut, October 22, 2015
# also youtube, Corey Schafer


# read file
file = open("tasteOfItaly.txt", "r")
read = file.readlines()

tempRecipe = ""
tempName = ""
recipeName = ""
recipe = ""
recipeList = []
counter = 366


# look for patterns
for line in read:
	#print(line[-3:])

	if line[-2:-1].isdigit() and len(line) < 40:
		tempName = line
		print(str(counter)+ "|" + repr(tempName)+ "|" + repr(tempRecipe))
		recipeList.append({tempName,tempRecipe})
		tempRecipe = ""
		counter += 1
	else:
		tempRecipe = tempRecipe + line

file.close()






with open('finalWrite2.txt', 'w') as f:
	for t in recipeList:
		f.write("%s\n" % t)


#for k, v in recipeList:
#	print(k + v)

'''
sample of file format

A free download from manybooks.net
The Project Gutenberg EBook of 365 Foreign Dishes, by Unknown
This eBook is for the use of anyone anywhere at no cost and with almost no restrictions whatsoever. You may
copy it, give it away or re−use it under the terms of the Project Gutenberg License included with this eBook or
online at www.gutenberg.net
Title: 365 Foreign Dishes
Author: Unknown
Release Date: November 7, 2003 [EBook #10011]
Language: English
Character set encoding: ISO−8859−1
• START OF THIS PROJECT GUTENBERG EBOOK 365 FOREIGN DISHES ***
Produced by Andrew Heath, Joshua Hutchinson, Audrey Longhurst and PG Distributed Proofreaders
365 FOREIGN DISHES
A Foreign Dish for every day in the year
1908
JANUARY.
1.−−Austrian Goulasch.
Boil 2 calves' heads in salted water until tender; then cut the meat from the bone. Fry 1 dozen small peeled
onions and 3 potatoes, cut into dice pieces; stir in 1 tablespoonful of flour and the sauce in which the meat was
cooked. Let boil up, add the sliced meat, 1 teaspoonful of paprica and salt to taste; let all cook together fifteen
minutes then serve very hot.
2.−−East India Fish.
Slice 1/2 pound of cooked salmon; then heat 1 ounce of butter in a stew−pan; add 2 small onions chopped
fine, 1 ounce of cocoanut, 2 hard−boiled eggs chopped. Let cook a few minutes, then add 1 pint of milk; let
boil up once. Add the fish, 1 teaspoonful of curry paste, 1 teaspoonful of paprica and salt to taste. Let cook a
few minutes, then stir in 1 large tablespoonful of boiled rice. Serve very hot with toast.
3.−−English Gems.
Cream 1 cup of butter with 2 cups of brown sugar; add 4 beaten eggs, 1 teaspoonful of soda dissolved in 1
large cup of strong coffee, 1 cup of molasses, 4 cups of sifted flour, 1/2 teaspoonful each of nutmeg, allspice,
cloves and mace, 2 teaspoonfuls of cream of tartar sifted with 1/2 cup of flour, 1 cup of raisins, 1/2 cup of
currants and chopped citron. Mix well and fill buttered gem pans 1/2 full and bake until done. Then cover
with chocolate icing.
1
4.−−Turkish Pudding.
Dissolve 1/2 box of gelatin; chop 1/4 pound of dates and mix with 2 ounces of boiled rice, 1/2 cup of
pulverized sugar and 1 teaspoonful of vanilla; then mix the gelatin with 1 pint of whipped cream. Mix all well
together and turn into a mold and stand on ice until cold. Sprinkle with chopped nuts. Serve with whipped
cream.
5.−−Chinese Chicken.
Cut a fat chicken into pieces at the joints; season with all kinds of condiments; then put in a deep saucepan.
Add some chopped ham, a few sliced bamboo sprouts, 1 chopped onion and a handful of walnuts. Cover with
hot water and let stew slowly until tender. Add some Chinese sauce and parsley. Serve with shredded
pineapple.
'''




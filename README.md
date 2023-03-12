### Create docker-container with image `dmitro2110/lab_1`
You will need to clone this repository yourself, open a terminal in the current folder and follow the instructions below :
1. `docker run -v ${PWD}:/var/lab_1 -itd dmitro2110/lab_1 `
2. `docker start name` (name - container name)
3. `docker exec -it name bash`
4. `php /var/lab_1/lab_1.php ARGUMENT`
## About script

Several characters must be passed to the argument to check for the existence
of the word. How many characters you enter of this length and there must be a
word, the answer will be given only when a word is found that contains all the
entered characters.

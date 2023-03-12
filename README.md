### Create docker-container with image `dmitro2110/lab_1`
1. `docker run -v ${PWD}:/var/lab_1 -itd dmitro2110/lab_1 `
2. `docker start name`
3. `docker exec -it name bash`
4. `php /var/lab_1/lab_1.php ARGUMENT`
## About script

Several characters must be passed to the argument to check for the existence
of the word. How many characters you enter of this length and there must be a
word, the answer will be given only when a word is found that contains all the
entered characters.
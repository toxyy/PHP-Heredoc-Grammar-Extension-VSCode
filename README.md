## About
VSCode doesn't highlight PHP syntax correctly in heredoc (or variabls concatenated in strings).

I'm experimenting with different methods of PHP templating and the lack of highlighting when using PHP within heredoc was getting rather irritating, so I sought to fix that. This extension is compatible with both .php and .phtml files.

I included my user settings.json for the colors I'm using as well. These settings also effect non heredoc variables within double quotes as well.

Includede test files are from my own PHP templating experiments that motivated this project.

Vsix file included for easy install.

## Method
At first I achieved this all in a single regex query in testing, but VSCode doesn't like multi line matches for tokens, so I took an alternative approach.

Bracket color alternation for arrays within heredoc strings match their indentation level. This was achieved by copying most of VSCode's PHP rules and having a copy of them run on heredoc code. This, combined with the regex I added to identify syntax groups, allows this highlighting to be robust.

I finished this over a month ago and didn't release it because I wanted to add another feature or two to make this "complete", but I've since forgotten what those were and am releasing this for now as is.

## Screenshots

![Test_1](https://toxyy.github.io/phpheredocvscode/test_1.png)

![Test_2](https://toxyy.github.io/phpheredocvscode/test_2.png)

![Test_31](https://toxyy.github.io/phpheredocvscode/test_3.png)

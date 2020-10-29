# Pitt University-Wide Mentorship Program

## How to Register to become a Pitt Mentor or Mentee
1. Navigate to Pitt University-Wide Mentorship Program Landing Page
2. Sign up and create an account using the links for "Freshman Sign-up Form" or "Become a Mentor Today" sign-up forms
3. Complete the questionnaire by answering the personal questions
4. Navigate back to the landing page and view matches under the "See Your Matches" tab
5. Completion of this step will automatically generate and display potential matches. From here, you can select from the possible mentor/mentee options
6. At any time, you can return to the landing page by clicking the "Pitt University-Wide Mentorship Program" tab in the upper left hand corner

## Constuction of Landing Page (index.html)
1. Downloaded Landing Page bootstrap zip-file
2. First step was to change all preset color pallets into the University of Pittsburgh's Hex colors HEX:#003594 and HEX:#FFB81C
3. About (Lines 55-63):
    * Group project pitch and general background information about the end product was included to give viewers pre-cursor information
    * Picture of current Pitt mentors was included to enhance the design of the webpage, and prevent it from being plain text all the way through
4. Benefits (Lines 67-83):
    * Research into the benefits of both being a mentor and a mentee were included in this section
    * Overall, goal was to provide potential applicants with the potential positive takeaways they can have as a result of this program
    * Benefits are surrounded by a Pitt Gold box to highlight their importance and encourage students to consider the program both for their social, and educational experience
5. Form Links (Lines 89-128):
    * "Freshman Sign-up Form" and "Become A Mentor Today" links both take the potential applicants to the registration form
    * Here, they provide information such as their name and email address in order to be placed into the system
    * Once completed, registered applicants can sign in under the "See Your Matches" window using their registered Pitt username for reference
    * Initially, they will see zero matches under their account because they have not yet completed the questionnaire form

## Construction of Questionnaire (Questionnaire.html)
1. This questionnaire was modeled after a Google Form that was designed to receive personal information regarding interests of mentor and mentee applicants
2. HTML was the primary code used. Once again, Pitt hex color pallets were used to create the aestetic that could appear on the official my.pitt.edu homepage
3. The questionnaire HTML file was created using textbox, checkbox, and radio button questions to receive and compile information into the server
4. Once signed up for the system, mentors and mentees will complete the questionnaire regarding both academic and extracurricular interests
5. The created automatic matching compiler will take one's responses and suggest potential mentor/mentee matches that shared similar responses
6. Questions such as bio, name, and email will be used to get in contact with any matches you form, and better get to know people

## Intentions
* This program seeks to help all incoming students during the transition to the college environment. Transitioning to college is a big challenge for freshmen every year
    * Sometimes just having a mentor to guide them through the first few months can make all the difference in making them feel comfortable in their new environment
* The goal of this program is to pair incoming freshmen with volunteer upperclassmen who will act as guides for first year students
    * Incoming first year students will answer a series of personality questions, beginning with broad questions and narrowing down to specific interests and passions that they hope to explore during their time at Pitt
    * The database will allow the student to choose traits and qualities that they hope to find in a mentor, such as their academic school, class schedule, and extracurricular interests
    * The database will use these responses to find a sufficient personality match and initiate communication between the students and their mentors
    
## Changes
* Initially we were hoping to match people based on personal short answer responses. We quickly realized that this would be a burden on both the matching process and our coding team. To solve this, we substituted these short answer questions for multiple choice and linear scale ones
* We decided that adding a short bio at the end would suffice for short answer questions and wouldn’t overburden the matching process
* We also decided that instead of overwhelming mentors with numerous mentees, we would instead limit each mentor to a maximum of 3 mentees. This allows mentors to focus on a few students instead of dividing their attention between many mentees

## Bootstrap Copyright Information

# [Start Bootstrap - Small Business](https://startbootstrap.com/templates/small-business/)

[Small Business](https://startbootstrap.com/templates/small-business/) is a responsive marketing landing page template for [Bootstrap](https://getbootstrap.com/) created by [Start Bootstrap](https://startbootstrap.com/).

## Preview

[![Small Business Preview](https://startbootstrap.com/assets/img/screenshots/templates/small-business.png)](https://startbootstrap.github.io/startbootstrap-small-business/)

**[View Live Preview](https://startbootstrap.github.io/startbootstrap-small-business/)**

## Status

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/StartBootstrap/startbootstrap-small-business/master/LICENSE)
[![npm version](https://img.shields.io/npm/v/startbootstrap-small-business.svg)](https://www.npmjs.com/package/startbootstrap-small-business)
[![Build Status](https://travis-ci.org/StartBootstrap/startbootstrap-small-business.svg?branch=master)](https://travis-ci.org/StartBootstrap/startbootstrap-small-business)
[![dependencies Status](https://david-dm.org/StartBootstrap/startbootstrap-small-business/status.svg)](https://david-dm.org/StartBootstrap/startbootstrap-small-business)
[![devDependencies Status](https://david-dm.org/StartBootstrap/startbootstrap-small-business/dev-status.svg)](https://david-dm.org/StartBootstrap/startbootstrap-small-business?type=dev)

## Download and Installation

To begin using this template, choose one of the following options to get started:

* [Download the latest release on Start Bootstrap](https://startbootstrap.com/templates/small-business/)
* Install via npm: `npm i startbootstrap-small-business`
* Clone the repo: `git clone https://github.com/StartBootstrap/startbootstrap-small-business.git`
* [Fork, Clone, or Download on GitHub](https://github.com/StartBootstrap/startbootstrap-small-business)

## Usage

### Basic Usage

After downloading, simply edit the HTML and CSS files included with the template in your favorite text editor to make changes. These are the only files you need to worry about, you can ignore everything else! To preview the changes you make to the code, you can open the `index.html` file in your web browser.

### Advanced Usage

After installation, run `npm install` and then run `npm start` which will open up a preview of the template in your default browser, watch for changes to core template files, and live reload the browser when changes are saved. You can view the `gulpfile.js` to see which tasks are included with the dev environment.

You must have npm and Gulp installed globally on your machine in order to use these features.

## Bugs and Issues

Have a bug or an issue with this template? [Open a new issue](https://github.com/StartBootstrap/startbootstrap-small-business/issues) here on GitHub or leave a comment on the [template overview page at Start Bootstrap](https://startbootstrap.com/templates/small-business/).

## About

Start Bootstrap is an open source library of free Bootstrap templates and themes. All of the free templates and themes on Start Bootstrap are released under the MIT license, which means you can use them for any purpose, even for commercial projects.

* <https://startbootstrap.com>
* <https://twitter.com/SBootstrap>

Start Bootstrap was created by and is maintained by **[David Miller](http://davidmiller.io/)**.

* <http://davidmiller.io>
* <https://twitter.com/davidmillerskt>
* <https://github.com/davidtmiller>

Start Bootstrap is based on the [Bootstrap](https://getbootstrap.com/) framework created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat).

## Copyright and License

Copyright 2013-2020 Start Bootstrap LLC. Code released under the [MIT](https://github.com/StartBootstrap/startbootstrap-small-business/blob/gh-pages/LICENSE) license.

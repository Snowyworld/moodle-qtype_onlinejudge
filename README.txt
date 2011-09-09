**This is the alpha version of the plugin and NOT recommended to use in any site**

Introduction
============

The Online Judge question type plugin for Moodle 2 quiz is designed for courses involving programming.
It can automatically grade submitted source code by testing them against customizable test cases (ACM-ICPC/Online Judge style).

The workflow is:

1. Administrators install and configure Online Judge plugin for Moodle 2.x.
2. Administrators install Online Judge question type plugin.
3. Teachers create "Online Judge" question type in a quiz and setup testcases etc.
4. Students submit code in Online Judge question in a quiz.
5. The judge daemon judges the submissions in background.
6. Teachers and students get judge results in the quiz.

Prerequisite
============

* Moodle 2.0 or above
* Online Judge plugin for Moodle 2.0x - http://github.com/hit-moodle/moodle-local_onlinejudge/

Download
========

Download it from https://github.com/Snowyworld/moodle-qtype_onlinejudge/archives/master

or using git:

`git clone git://github.com/Snowyworld/moodle-qtype_onlinejudge.git onlinejudge`

Installation / Upgrading
========================

*MOODLE_PATH means the root path of your moodle installation.*

1. If the folder `MOODLE_PATH\question\type\onlinejudge` exists, remove it.
2. Make sure the folder name of this plugin is `onlinejudge`. If not, rename it.
3. Put `onlinejudge` into `MOODLE_PATH\queston\type`
4. Login your site as admin and access /admin/index.php. The plugins will be installed/upgraded.

Usage
=====

Online Judge question type
----------------------------

After installation, there will be a new question type called *Online Judge* appears in the *"Add an question..."* dropdown list when you edit a quiz. Simply click it and follow the inline help.

Links
=====

Home: <https://github.com/Snowyworld/moodle-qtype_onlinejudge>


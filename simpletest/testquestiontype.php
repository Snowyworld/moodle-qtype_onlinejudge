<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
 
/**
 * Unit tests for the online judge question definition class.
 *
 * @package    qtype
 * @subpackage onlinejudge
 * @copyright  2011 Hu Xue-feng <huxuefeng.cs@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

   
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/question/engine/simpletest/helpers.php');


/**
 * Unit tests for the matching question definition class.
 *
 * @copyright 2011 Hu Xue-feng <huxuefeng.cs@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class qtype_onlinejudge_question_test extends UnitTestCase {
    public function test_get_question_summary() {
        $onlinejudge = test_question_maker::make_an_onlinejudge_question();
        $onlinejudge->questiontext = 'Hello <img src="http://example.com/globe.png" alt="world" />';
        $this->assertEqual('Hello [world]', $onlinejudge->get_question_summary());
    }

    public function test_summarise_response() {
        $longstring = str_repeat('0123456789', 50);
        $onlinejudge = test_question_maker::make_an_onlinejudge_question();
        $this->assertEqual($longstring,
                $onlinejudge->summarise_response(array('answer' => $longstring)));
    }
}

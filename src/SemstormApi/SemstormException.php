<?php
/**
 * Copyright 2017, SEMSTORM International sp. z o.o. All Rights Reserved.
 *
 * Licensed under the GNU General Public License v3.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://choosealicense.com/licenses/gpl-3.0/
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace SemstormApi;
/**
 * Define a custom exception class.
 */
class SemstormException extends \Exception {
  // Redefine the exception so message isn't optional
  public function __construct($message, $code = 0, Exception $previous = null) {
    // make sure everything is assigned properly
    parent::__construct($message, $code, $previous);
  }
  
  // custom string representation of object
  public function __toString() {
    return __CLASS__ . " SEMSTORM API: [{\$this->code}]: {\$this->message}\\n";
  }
}


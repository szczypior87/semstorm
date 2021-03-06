<?php
/**
 * Copyright 2018, SEMSTORM International sp. z o.o. All Rights Reserved.
 *
 * Licensed under the Apache License Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace SemstormApi\Tools;


class ContentTools extends \SemstormApi\Semstorm{
  
    
  /**
   * Use Text statistics tool via API.
   * 
   * @param array $data parameters for tool.
   * @param array $data['language'] string language.
   * @param array $data['text'] string text to analyse.
   */
  public function textStatistics($data) {
    try{
      $response = $this -> httpClient -> post("tools/content-tools/text-statistics.json", [
              'json' => $data, 
    ]);
      return json_decode($response -> getBody(), true);
    }catch( \Exception $e){
      return $this->handleRequestException($e);
    }
  }
    
  /**
   * Use Text analysis tool via API.
   * 
   * @param array $data parameters for tool.
   * @param array $data['language'] string language.
   * @param array $data['text'] string text to analyse.
   */
  public function textAnalysis($data) {
    try{
      $response = $this -> httpClient -> post("tools/content-tools/text-analysis.json", [
              'json' => $data, 
    ]);
      return json_decode($response -> getBody(), true);
    }catch( \Exception $e){
      return $this->handleRequestException($e);
    }
  }
  
}
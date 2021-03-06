<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\Cms;

use Aliyun\Core\RpcAcsRequest;

class CreateAlarmRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "CreateAlarm");
		$this->setMethod("POST");
	}

	private  $callby_cms_owner;

	private  $name;

	private  $namespace;

	private  $metricName;

	private  $dimensions;

	private  $period;

	private  $statistics;

	private  $comparisonOperator;

	private  $threshold;

	private  $evaluationCount;

	private  $contactGroups;

	private  $startTime;

	private  $endTime;

	private  $silenceTime;

	private  $notifyType;

	public function getcallby_cms_owner() {
		return $this->callby_cms_owner;
	}

	public function setcallby_cms_owner($callby_cms_owner) {
		$this->callby_cms_owner = $callby_cms_owner;
		$this->queryParameters["callby_cms_owner"]=$callby_cms_owner;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getNamespace() {
		return $this->namespace;
	}

	public function setNamespace($namespace) {
		$this->namespace = $namespace;
		$this->queryParameters["Namespace"]=$namespace;
	}

	public function getMetricName() {
		return $this->metricName;
	}

	public function setMetricName($metricName) {
		$this->metricName = $metricName;
		$this->queryParameters["MetricName"]=$metricName;
	}

	public function getDimensions() {
		return $this->dimensions;
	}

	public function setDimensions($dimensions) {
		$this->dimensions = $dimensions;
		$this->queryParameters["Dimensions"]=$dimensions;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function setPeriod($period) {
		$this->period = $period;
		$this->queryParameters["Period"]=$period;
	}

	public function getStatistics() {
		return $this->statistics;
	}

	public function setStatistics($statistics) {
		$this->statistics = $statistics;
		$this->queryParameters["Statistics"]=$statistics;
	}

	public function getComparisonOperator() {
		return $this->comparisonOperator;
	}

	public function setComparisonOperator($comparisonOperator) {
		$this->comparisonOperator = $comparisonOperator;
		$this->queryParameters["ComparisonOperator"]=$comparisonOperator;
	}

	public function getThreshold() {
		return $this->threshold;
	}

	public function setThreshold($threshold) {
		$this->threshold = $threshold;
		$this->queryParameters["Threshold"]=$threshold;
	}

	public function getEvaluationCount() {
		return $this->evaluationCount;
	}

	public function setEvaluationCount($evaluationCount) {
		$this->evaluationCount = $evaluationCount;
		$this->queryParameters["EvaluationCount"]=$evaluationCount;
	}

	public function getContactGroups() {
		return $this->contactGroups;
	}

	public function setContactGroups($contactGroups) {
		$this->contactGroups = $contactGroups;
		$this->queryParameters["ContactGroups"]=$contactGroups;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getSilenceTime() {
		return $this->silenceTime;
	}

	public function setSilenceTime($silenceTime) {
		$this->silenceTime = $silenceTime;
		$this->queryParameters["SilenceTime"]=$silenceTime;
	}

	public function getNotifyType() {
		return $this->notifyType;
	}

	public function setNotifyType($notifyType) {
		$this->notifyType = $notifyType;
		$this->queryParameters["NotifyType"]=$notifyType;
	}
	
}
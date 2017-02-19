@extends('layouts.app')

@section('title', 'Regolamento')
@section('description', 'Regolamento di Tokyo 0 Last Hope')


@section('content')
<div class="wrap-rulebook">
	<div class="rulebook-index">
		<h6>@lang('messages.rules_and_play_guide')</h6>
		
		<ul>
			<li><a id="general_rules" href="#generale">» @lang('messages.general_rules')</a></li>
			<li><a id="characters_creation" href="#personaggio">» @lang('messages.characters_creation')</a></li>
			<li><a id="fundamentals_actions" href="#base">» @lang('messages.fundamentals_actions')</a></li>
			<li><a id="alignment" href="#allineamenti">» @lang('messages.alignment')</a></li>
			<li><a id="stats_rules" href="#statistiche">» @lang('messages.stats_rules')</a></li>
			<li><a id="talents_rules" href="#talenti">» @lang('messages.talents_rules')</a></li>
			<li><a id="alter_transformation" href="#alterego">» @lang('messages.alter_transformation')</a></li>
			<li><a id="dinasty_loss" href="#dinastia">» @lang('messages.dinasty_loss')</a></li>
			<li><a id="power_lvls_evolution" href="#livelli">» @lang('messages.power_lvls_evolution')</a></li>
			<li><a id="master_quest" href="#master&quest">» @lang('messages.master_quest')</a></li>
			<li><a id="death_resurrection" href="#morte">» @lang('messages.death_resurrection')</a></li>
			<li><a id="png_rules" href="#png">» @lang('messages.png_rules')</a></li>
			<li><a id="double_characters" href="#doppipg">» @lang('messages.double_characters')</a></li>
			<li><a id="pregnant_marriage" href="#matrimoni">» @lang('messages.pregnant_marriage')</a></li>
			<li><a id="board_rules" href="#bacheche">» @lang('messages.board_rules')</a></li>
			<li><a id="glossary_rules" href="#glossario">» @lang('messages.glossary_rules')</a></li>	
		</ul>	
	</div>
	<div class="rulebook-content">
		<div id="general_rules-panel">
			@include('pages.rulebooks.generalrules')	
		</div>
		<div id="characters_creation-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.pg')	
		</div>
		<div id="fundamentals_actions-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.guidanuovi')		
		</div>
		<div id="alignment-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.allineamenti')	
		</div>
		<div id="stats_rules-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.statistiche')	
		</div>
		<div id="talents_rules-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.talenti')
		</div>
		<div id="alter_transformation-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.aura_trasformazioni')
		</div>
		<div id="dinasty_loss-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.din_ing_pass')
		</div>
		<div id="power_lvls_evolution-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.evoluzione')
		</div>
		<div id="master_quest-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.m_quest')
		</div>
		<div id="death_resurrection-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.morte_resurrezione')
		</div>
		<div id="png_rules-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.png')
		</div>
		<div id="double_characters-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.doppipg')
		</div>
		<div id="pregnant_marriage-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.gravid_matrim')
		</div>
		<div id="board_rules-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.bacheche')	
		</div>
		<div id="glossary_rules-panel" class="rulebook-boards-hidden">
			@include('pages.rulebooks.glossario')
		</div>	
	</div>
</div>	            


@endsection

@section('custom-js')

<script src="{{ elixir('assets/js/rulebook-js.js') }}" type="text/javascript"></script>

@endsection
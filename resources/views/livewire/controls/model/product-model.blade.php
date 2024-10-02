<div>
    <x-controls.lookup.model :show-model="$showModel" :height="'h-[40rem]'" :width="'w-3/5'" label="Product">
        <div class="flex flex-col  gap-3">

            <x-input.floating wire:model="vname" label="Name" />

            <x-dropdown.wrapper label="Product Type" type="producttype_name">
                <div class="relative ">
                    <x-dropdown.input label="Product Type" id="producttype_name"
                                      wire:model.live="producttype_name"
                                      wire:keydown.arrow-up="decrementProductType"
                                      wire:keydown.arrow-down="incrementProductType"
                                      wire:keydown.enter="enterProductType"/>
                    <x-dropdown.select>
                        @if($producttypeCollection)
                            @forelse ($producttypeCollection as $i => $producttype)
                                <x-dropdown.option highlight="{{$highlightProductType === $i  }}"
                                   wire:click.prevent="setProductType('{{$producttype->vname}}','{{$producttype->id}}')">
                                    {{ $producttype->vname }}
                                </x-dropdown.option>
                            @empty
                                <button
                                    wire:click.prevent="productTypeSave('{{$producttype_name}}')"
                                    class="text-white bg-green-500 text-center w-full">
                                    create
                                </button>
                            @endforelse
                        @endif
                    </x-dropdown.select>
                </div>
            </x-dropdown.wrapper>

            <x-dropdown.wrapper label="HSN Code" type="hsncodeTyped">
                <div class="relative ">
                    <x-dropdown.input label="HSN Code" id="hsncode_name"
                                      wire:model.live="hsncode_name"
                                      wire:keydown.arrow-up="decrementHsncode"
                                      wire:keydown.arrow-down="incrementHsncode"
                                      wire:keydown.enter="enterHsncode"/>
                    <x-dropdown.select>
                        @if($hsncodeCollection)
                            @forelse ($hsncodeCollection as $i => $hsncode)
                                <x-dropdown.option highlight="{{$highlightHsncode === $i  }}"
                                       wire:click.prevent="setHsncode('{{$hsncode->vname}}','{{$hsncode->id}}')">
                                    {{ $hsncode->vname }}
                                </x-dropdown.option>
                            @empty
                                <button
                                    wire:click.prevent="hsncodeSave('{{$hsncode_name}}')"
                                    class="text-white bg-green-500 text-center w-full">
                                    create
                                </button>
                            @endforelse
                        @endif
                    </x-dropdown.select>
                </div>
            </x-dropdown.wrapper>

            <x-dropdown.wrapper label="Unit" type="unitTyped">
                <div class="relative ">
                    <x-dropdown.input label="Unit" id="unit_name"
                                      wire:model.live="unit_name"
                                      wire:keydown.arrow-up="decrementUnit"
                                      wire:keydown.arrow-down="incrementUnit"
                                      wire:keydown.enter="enterUnit"/>
                    <x-dropdown.select>
                        @if($unitCollection)
                            @forelse ($unitCollection as $i => $unit)
                                <x-dropdown.option highlight="{{$highlightUnit === $i  }}"
                                       wire:click.prevent="setUnit('{{$unit->vname}}','{{$unit->id}}')">
                                    {{ $unit->vname }}
                                </x-dropdown.option>
                            @empty
                                <button
                                    wire:click.prevent="unitSave('{{$unit_name}}')"
                                    class="text-white bg-green-500 text-center w-full">
                                    create
                                </button>
                            @endforelse
                        @endif
                    </x-dropdown.select>
                </div>
            </x-dropdown.wrapper>

            <x-dropdown.wrapper label="GST Percent" type="gstpercentTyped">
                <div class="relative ">
                    <x-dropdown.input label="GST Percent" id="gstpercent_name"
                                      wire:model.live="gstpercent_name"
                                      wire:keydown.arrow-up="decrementGstPercent"
                                      wire:keydown.arrow-down="incrementGstPercent"
                                      wire:keydown.enter="enterGstPercent"/>
                    <x-dropdown.select>
                        @if($gstpercentCollection)
                            @forelse ($gstpercentCollection as $i => $gstpercent)
                                <x-dropdown.option highlight="{{$highlightGstPercent === $i  }}"
                                    wire:click.prevent="setGstPercent('{{$gstpercent->vname}}','{{$gstpercent->id}}')">
                                    {{ $gstpercent->vname }}
                                </x-dropdown.option>
                            @empty
                                <button
                                    wire:click.prevent="gstPercentSave('{{$gstpercent_name}}')"
                                    class="text-white bg-green-500 text-center w-full">
                                    create
                                </button>
                            @endforelse
                        @endif
                    </x-dropdown.select>
                </div>
            </x-dropdown.wrapper>

            <x-input.floating  wire:model="quantity" label="Quantity" />
            <x-input.floating  wire:model="price" label="Price" />

        </div>
    </x-controls.lookup.model>
</div>
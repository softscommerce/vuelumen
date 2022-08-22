<template>
    <div class="form_data">
        <h4 class="mb_3">My Form</h4>
        <hr class="mb_3">
        <form action="">
            <div class="mb_4">
                <base-input label="Input One" placeholder="input one"></base-input>
            </div>
            <div class="mb_4">
                <base-inputn label="Input Two" placeholder="input two"></base-inputn>
            </div>
            <div class="mb_4">
                <base-select label="Select One" placeholder="select one"></base-select>
            </div>
            <div class="mb_4">
                <base-select1 label="Select Two" placeholder="select two"></base-select1>
            </div>
            <div class="mb_4">
                <base-textarea rowNum="6" label="Text Area One" placeholder="text area one"></base-textarea>
            </div>
            <div class="mb_4">
                <base-textarea1 rowNum="6" label="Text Area One" placeholder="text area one"></base-textarea1>
            </div>
            <div class="mb_4">
                <base-checkbox label="Checkbox"></base-checkbox>
            </div>
            <div class="mb_4">
                <base-checkbox1 label="Checkbox"></base-checkbox1>
            </div>
            <div class="mb_4">
                <base-radiobox label="Radio Box" radioName="radiobox"></base-radiobox>
            </div>
            <div class="mb_4">
                <base-radiobox1 label="Radio Box" radioName="radiobox"></base-radiobox1>
            </div>
            <div class="btn">
                <div class="mb_4">
                    <base-button type="button">Button</base-button>
                </div>
                <div class="mb_4">
                    <base-button1 type="button">Button</base-button1>
                </div>
                <div class="mb_4">
                    <base-button2 type="button">Button</base-button2>
                </div>
                <div class="mb_4">
                    <base-button3 type="button">Button</base-button3>
                </div>
                <div class="mb_4">
                    <base-button4 type="button">Button</base-button4>
                </div>
                <div class="mb_4">
                    <base-button5 type="button">Button</base-button5>
                </div>
                <div class="mb_4">
                    <base-button6 type="button">Button</base-button6>
                </div>
            </div>
        </form>
    </div>
</template>
<style scoped>

.mb_1 {margin-bottom: 4px;}
.mb_2 {margin-bottom: 8px;}
.mb_3 {margin-bottom: 12px;}
.mb_4 {margin-bottom: 16px;}
.mb_5 {margin-bottom: 20px;}
.mb_6 {margin-bottom: 24px;}
.btn {
    display: flex;
    column-gap: 12px;
}
</style>
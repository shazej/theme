import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AddMembershipRoutingModule } from './add-membership-routing.module';
import { AddMembershipComponent } from './add-membership.component';


@NgModule({
  declarations: [
    AddMembershipComponent
  ],
  imports: [
    CommonModule,
    AddMembershipRoutingModule
  ]
})
export class AddMembershipModule { }

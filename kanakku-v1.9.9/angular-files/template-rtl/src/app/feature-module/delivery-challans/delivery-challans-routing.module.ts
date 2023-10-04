import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DeliveryChallansComponent } from './delivery-challans.component';

const routes: Routes = [{ path: '', component: DeliveryChallansComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class DeliveryChallansRoutingModule { }

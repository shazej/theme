import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { EstimatesListRoutingModule } from './estimates-list-routing.module';
import { EstimatesListComponent } from './estimates-list.component';
import { SharedModule } from 'src/app/shared/shared.module';

@NgModule({
  declarations: [EstimatesListComponent],
  imports: [CommonModule, EstimatesListRoutingModule, SharedModule],
})
export class EstimatesListModule {}
